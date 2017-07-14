<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class Admincontroller extends Controller
{
    public function index()
    {
       $data['users'] = User::where('role_id','!=',1)->get();
       return view('admin.manageuser.index',$data);
    }
}
