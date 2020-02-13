<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
    	$hl = 'Hello, world!';
    	return view('index')->with('hl',$hl);
    }
}
