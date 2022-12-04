<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Mail\Websitemail;
use App\Models\Token;
use Hash;
use Auth;

class CustomerLoginController extends Controller
{
    public function index(){
        $pass = hash::make('1234');
        return view('customer.login', compact('pass'));
    }
    public function forget_password(){
        return view('customer.forget_password');
    }
    public function forget_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $customer_data = Customer::where('email',$request->email)->first();
        if(!$customer_data){
            return redirect()->back()->with('error','Email address not found!');
        }

        $token = hash('sha256',time());


        $customer_data -> token = $token;
        $customer_data -> update();

        $reset_link = url('customer/reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Password';
        $message = 'Please click the following link: <br>';
        $message .= '<a href = "'.$reset_link.'">Click Here</a>';

        \Mail::to($request->email)->send(new Websitemail($subject, $message));
        return redirect()->route('customer_login')->with('success', 'Please Check your email');
    }

    public function login_submit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::guard('customer')->attempt($credential)){
            $customer = Customer::where('email', $request->email)->first();
            if($request->remember_me){
                Cookie::queue('remember_me',$request->email,time()+36000);
            }
            else{
                Cookie::expire('remember_me');
            }
            session()->put("c_id",$customer->id);
            session()->put("type",'c');
            return redirect()->route('customer_home');
        }
        else {
            return redirect()->route('customer_login')->with('error', 'Information is not correct');
        }
    }
    public function logout()
    {
        Auth::guard('customer')->logout();
        session()->flush();
        return redirect()->route('customer_login');
    }

    public function reset_password($token,$email){
        $customer_data = Customer::where('token',$token)->where('email', $email)->first();
        if(!$customer_data){
            return redirect()->route('customer_login');
        }
        return view('customer.reset_password', compact('token','email'));
    }

    public function reset_password_submit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password',
        ]);

        $customer_data = Customer::where('token',$request->token)->where('email',$request->email)->first();
        $customer_data->password = Hash::make($request->password);
        $customer_data->token = '';
        $customer_data->update();

        return redirect()->route('customer_login')->with('success','password reset successful');
    }
    public function signup(){
        return view('customer.signup');
    }
    public function signup_submit(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required',
            'retype_password' => 'required|same:password',
        ]);

        //return redirect()->back()->with('success','Complete Email varification');

        $token = hash('sha256',time());
        $password = Hash::make($request->password);
        $verification_link = url('signup-verify/'.$request->email.'/'.$token);

        $obj = new Customer();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->password = $password;
        $obj->token = $token;
        $obj->status =0;
        $obj->save();

        $subject ='Signup Varification';
        $message = 'Please click on the link below to confirm signup process: <br>';
        $message .='<a href="'.$verification_link.'">';
        $message .= $verification_link;
        $message .= '</a>';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->back()->with('success','ck email');

    }
    public function signup_verify($email,$token){
         $customer_data = Customer::where('email',$email)->where('token',$token)->first();
         if($customer_data) {
            $customer_data ->token ='';
            $customer_data -> status =1;
            $customer_data ->update();

            return redirect()->route('customer_login')->with('success','email verified');
         }
         else{
            return redirect()->route('customer_login');
         }
    }

    public function APIlogin(Request $req){
        $user = Customer::Where('email', $req->email)->Where('password', $req->password)->first();

        if($user){
            $api_token = Str::random(64);
            $token = new Token();
        }
    }

}
