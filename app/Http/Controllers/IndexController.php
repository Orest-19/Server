<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
    	$hl = 'Hello, world!';
    	$par = 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.';
    	return view('index')->with(['hl'=>$hl,
    							    'par'=>$par]);
    	
    }
}
