<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaleanderController extends Controller
{
    public function getindex()
    {
     return view('user.caleander.index');
    }
}
