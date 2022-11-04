<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
    public function viwe_customer(){
        $users = DB::select('select * from customers');
        return view('admin.customer',['users'=>$users]);
        }
}
