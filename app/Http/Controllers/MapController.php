<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Auth;

class MapController extends Controller
{
  public function index()
  {
    $data['locations'] = Location::where('user_id',Auth::id())->get();
    return view('user.map.index',$data);
  }
  public function cretaeLocation()
  {
    return view('user.map.form');
  }
  public function storeLocation(Request $request)
  {
    $location = new Location;
    $location->location = $request->location;
    $location->description = $request->description;
    $location->lat = $request->lat;
    $location->lng = $request->lng;
    $location->user_id = Auth::id();
    $location->save();

    return redirect('/map');

  }
  public function viewLocation($id)
  {
    $location = Location::find($id);
    return view('user.map.view',$location);

  }
}
