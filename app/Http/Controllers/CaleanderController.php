<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use Auth;
class CaleanderController extends Controller
{
    public function getindex()
    {
      $data['dates'] = Event::where('user_id',Auth::id())->pluck('date');

     return view('user.caleander.index',$data);
    }
}
