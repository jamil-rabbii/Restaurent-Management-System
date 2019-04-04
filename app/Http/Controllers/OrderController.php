<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Order;

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
    public function edit($id){
       $orderedit=Order::where('id',$id)->first();
       return view('admin.edit.orderedit',['order'=>$orderedit]);
  }
  public function update(Request $request){
      /*$feedback = $request->input('id');*/
      //echo $request->id;
       $order=Order::find($request->id);
       $order->name = $request ->name;
       $order->address = $request ->address;
       $order->date = $request ->date;
       $order->foodnumber = $request ->foodnumber;
       $order->time = $request ->time;
       $order->person = $request ->person;

       $order->save();
      // return view('admin.master');
       return redirect('/home')->with('ordermessage',' You Updated Desire Data Succesfully');
    }
    public function deleteorder($id){
      $dltorder=Order::find($id);
      $dltorder->delete();
      return redirect('/home')->with('ordermessage','You Deleted Unwanted Data Succesfully');
    }
}
