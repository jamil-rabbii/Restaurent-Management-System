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
      echo "Record inserted successfully.<br/>";
      echo '<a href = "">Click Here</a> to go back.';
    }
}
