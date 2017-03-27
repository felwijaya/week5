<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request) 
    {
    	$n = $request->input('nama');
    	$e = $request->input('email');
    	$g = $request->input('gender');
    	$gun = $request->input('gun');

    	return view('forms')
    	->with('nama', $n)
    	->with('email', $e)
    	->with('gender', $g)
    	->with('gun', $gun);
    }
}
