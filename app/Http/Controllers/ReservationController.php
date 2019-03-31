<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
     public function insert(Request $request){
		$name = $request->input('name');
		$email = $request->input('email');
		$phone = $request->input('phone');
		$person = $request->input('person');
		$date = $request->input('date');
		$occation = $request->input('occation');
		$srequest = $request->input('srequest');

	
		\DB::table('reservations')->insert([
    	['name'=>$name, 'email'=>$email, 'phone'=>$phone,'person'=>$person,'date'=>$date,'occation'=>$occation,'request'=>$srequest]
	]);
		/*
       echo "<h3>Congretulations</h3><br/>You Reserve a Table For You Succesfully";
      echo "<br/>";
      echo '<a href = "http://localhost/P300ByLaravel/public/">Click Here</a> to go back.';*/
      return view('frontView.home.homeContent');
    }
}
