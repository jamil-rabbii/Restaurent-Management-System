<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Feedback;

class FeedbackController extends Controller
{
     public function insert(Request $request){
		$name = $request->input('name');
		$email = $request->input('email');
		$message = $request->input('message');
		
		\DB::table('feedback')->insert([
    	['name'=>$name, 'email'=>$email, 'message'=>$message]
	]);
	/*
      echo "<h3>Thank You For Your Suggestion</h3><br/>";
      echo '<a href = "http://localhost/P300ByLaravel/public/">Click Here</a> to go back.'; */
       return view('frontView.home.homeContent');
    }
    /*
    public function view(){
    	$feedback= feedback::all();
    	return view('admin.master',['fback'=>$feedback]);
    }
   */
}
