<?php

namespace App\Http\Controllers;

use InfyOm\Generator\Utils\ResponseUtil;
use Response;

class HomeController extends Controller
{

    public function index()
    {
      // if(!Gate::allows('isTeacher')){
      //   abort(404,"Sorry,You cannot do these actions");
      // }
      return view('home');


    }
}