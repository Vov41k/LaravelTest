<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class WelcomeController extends Controller
{
    public function index(){

    	$feedbacks=Feedback::orderBy('created_at', 'desc')->get();	

    	return view('welcome',compact('feedbacks'));
    }
}
