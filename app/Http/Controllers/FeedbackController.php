<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
     public function insert(Request $request){
		$name = $request->input('name');
		$email = $request->input('email');
		$message = $request->input('message');
		
		\DB::table('feedback')->insert([
    	['name'=>$name, 'email'=>$email, 'message'=>$message]
	]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "">Click Here</a> to go back.';
    }
}
