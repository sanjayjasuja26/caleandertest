<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class dashboardController extends Controller
{
    public function index()
    {


      return view('dashboard.index');
    }
}
