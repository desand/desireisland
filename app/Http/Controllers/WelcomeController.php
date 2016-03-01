<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function h5()
    {
    	return view('pages.h5');
    }

    public function fullpage()
    {
    	return view('pages.fullpage');
    }
}
