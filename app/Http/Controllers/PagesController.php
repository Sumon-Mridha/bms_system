<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.index');
    }
    public function about(){
    	return view('pages.about');
    }
    public function services(){
    	$data = array('title'=>'Services', 'services'=> ['Programming','Web Development','Graphics Design']);
   
    	return view('pages.services')->with($data);
    }
}
