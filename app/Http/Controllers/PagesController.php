<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	public function index() 
	{
		$people = ['Taylor', 'Matt', 'Jeffrey'];
		return view('welcome', compact('people'));	
	}

	public function about() 
	{
		return "About";	
	}
}
