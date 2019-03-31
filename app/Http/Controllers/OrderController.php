<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function insert(Request $request){
		$name = $request->input('name');
		$address = $request->input('address');
		$date = $request->input('date');
		$foodnumber = $request->input('foodnumber');
		$time = $request->input('time');
		$person = $request->input('person');

        
		
		\DB::table('orders')->insert([
    	['name'=>$name, 'address'=>$address, 'date'=>$date, 'foodnumber'=>$foodnumber,'time'=>$time,'person'=>$person]
	]);
     /* echo "<h3>Thank You For Your Order</h3><br/>We Will Deliverd Your Food Within 30 Minutes Approximately";
      echo "<br/>";
      echo '<a href = "http://localhost/P300ByLaravel/public/">Click Here</a> to go back.'; */
       return view('frontView.home.homeContent');
    }
}
