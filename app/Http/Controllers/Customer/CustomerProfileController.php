<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Customer;
use App\Mail\Websitemail;
use Hash;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class CustomerProfileController extends Controller
{
    public function index(){
        return view('customer.profile');
    }

    public function profile_submit(Request $request){

        $customer_data = Customer::where('email',FacadesAuth::guard('customer')->user()->email)->first();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            //'phone' => 'required',
            //'country' => 'required',
            //'address' => 'required',
            //'state' => 'required',
            //'city' => 'required',
            //'zip' => 'required',
        ]);

        if($request-> password!=''){
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password',
            ]);

            $customer_data->password = Hash::make($request->password);
        }

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            //unlink(public_path('uploads/'.$customer_data->photo));
            $ext = $request->file('photo')->extension();
            $final_name = time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $customer_data->photo =$final_name;

        }

        $customer_data-> name = $request->name;
        $customer_data -> email = $request -> email;
        $customer_data-> phone = $request->phone;
        $customer_data -> country = $request -> country;
        $customer_data-> address = $request->address;
        $customer_data -> state = $request -> state;
        $customer_data-> city = $request->city;
        $customer_data -> zip = $request -> zip;

        $customer_data -> update();

        return redirect()->back()->with('success','Profile information updated');
    }

    public function APIProfileData(Request $request){
        $token = $request->header("Authorization");
        $token = json_decode($token);
        $data = Customer::where('id',$token->userId)->first();
        return $data;
    }

    public function APIEditProfile(Request $request){
        $token = $request->header("Authorization");
        $token = json_decode($token);
        $customer_data = Customer::where('id',$token->userId)->first();

        $customer_data-> name = $request->name;
        $customer_data -> email = $request -> email;
        $customer_data-> phone = $request->phone;
        $customer_data -> country = $request -> country;
        $customer_data-> address = $request->address;
        $customer_data -> state = $request -> state;
        $customer_data-> city = $request->city;
        $customer_data -> zip = $request -> zip;

        $customer_data -> update();
        return true;
    }


}
