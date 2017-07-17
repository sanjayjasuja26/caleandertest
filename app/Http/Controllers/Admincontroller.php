<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class Admincontroller extends Controller
{
    public function index()
    {
      if(!Auth::check()) return redirect('/');

       $data['users'] = User::where('role_id','!=',1)->get();

       return view('admin.manageuser.index',$data);

    }
    public function getview($id)
    {
    $data['user'] = User::find($id);

     return view('admin.manageuser.view',$data);

    }
    public function getaccess($id)
    {
    if(!\Session::has('adminId'))
    {

      $adminId = Auth::user()->id;



      \Session::put('adminId', $adminId);
      Auth::logout();
      Auth::loginUsingId($id);


      return redirect('/');
    }
    else{

     $adminId =\Session::get('adminId');
     \Session::forget('adminId');
     Auth::logout();
     Auth::loginUsingId($adminId);

     return redirect('/');
    }
    }
    public function getEventIndex($id)
    {
      $data['userId'] =  $id;

     return view('admin.manageuser.event.index',$data);
    }
    public function getCreateEvent($userId)
    {
      $data['userId'] = $userId;
    return view('admin.manageuser.event.form',$data);
    }
}
