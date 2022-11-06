<?php

namespace App\Http\Controllers\Admin;
Use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Mail\Websitemail;
use Hash;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class AdminProfileController extends Controller
{

    public function index(){
        return view('admin.profile');
    }

    public function profile_submit(Request $request){

        $admin_data = Admin::where('email',FacadesAuth::guard('admin')->user()->email)->first();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if($request-> password!=''){
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password',
            ]);

            $admin_data->password = Hash::make($request->password);
        }

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            unlink(public_path('uploads/'.$admin_data->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'admin'.'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $admin_data->photo =$final_name;

        }

        $admin_data-> name = $request->name;
        $admin_data -> email = $request -> email;
        $admin_data -> update();

        return redirect()->back()->with('success','Profile information updated');
    }
        public function deleteCustomer(Request $request){
        $customer = Customer::where('id', $request->id)->first();
        $customer->delete();
        // session()->flash('msg', 'Delete successful.');
        return redirect('/admin/customers');
    }
}