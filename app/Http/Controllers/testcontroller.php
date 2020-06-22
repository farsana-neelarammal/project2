<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    function testfunction(){
    	return view('test');
    }
}
