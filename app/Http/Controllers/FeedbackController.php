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
      // return view('frontView.home.homeContent');
      return redirect('/')->with('message',' Dear Valuable Customer,Thanks For Your Opinion');
    }

        // Edit feedback
    public function edit($id){
       $feedbackedit=Feedback::where('id',$id)->first();
       return view('admin.edit.feedbackedit',['feedback'=>$feedbackedit]);
        
        /*$table = Feedback::find($request->id);

        $table->name = $request->name;
        $table->email = $request->email;
        $table->message = $request->message;

        $table->insert();
        return redirect()->back();*/

    }
    public function update(Request $request){
      /*$feedback = $request->input('id');*/
      //echo $request->id;
       $feedback=Feedback::find($request->id);
       $feedback->name = $request ->name;
       $feedback->email = $request ->email;
       $feedback->message = $request ->message;
       $feedback->save();
      // return view('admin.master');
       return redirect('/home')->with('feedmessage',' You Updated Desire Data Succesfully');
    }
    public function deletefeed($id){
      $dltfeedback=Feedback::find($id);
      $dltfeedback->delete();
      return redirect('/home')->with('feedmessage','You Deleted Unwanted Data Succesfully');
    }
}
