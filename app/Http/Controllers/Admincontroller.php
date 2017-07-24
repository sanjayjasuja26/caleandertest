<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Event;
use App\Location;
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
     $data['events'] = Event::where('user_id',$id)->get();

     return view('admin.manageuser.event.index',$data);
    }
    public function getCreateEvent($userId)
    {
      $data['userId'] = $userId;
    return view('admin.manageuser.event.form',$data);
    }

    public function getstoreEvent(Request $request)
    {

      $event = new Event;
      $event->user_id = $request->user_id;
      $event->date = $request->date;
      $event->task = $request->task;
      $event->enddate = $request->enddate;
      $event->time = $request->time;
      $event->save();
      return redirect('manageuser/event/'.$request->user_id);

    }
    public function eventDelete($id)
    {
      $event = Event::find($id);
      if($event)
         $event->delete();
        return back();
    }
    public function mapTask($id)
    {

      $data['locations'] =Location::where('user_id',$id)->get();

      return view('admin.manageuser.map.index1',$data);
    }
}
