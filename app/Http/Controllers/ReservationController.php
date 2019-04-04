<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Reservation;

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
    public function edit($id){
       $reservationedit=Reservation::where('id',$id)->first();
       return view('admin.edit.reservationedit',['reservation'=>$reservationedit]);
  }
  public function update(Request $request){
      /*$feedback = $request->input('id');*/
      //echo $request->id;
       $reservation=Reservation::find($request->id);
       $reservation->name = $request ->name;
       $reservation->email = $request ->email;
       $reservation->phone = $request ->phone;
       $reservation->person = $request ->person;
       $reservation->date = $request ->date;
       $reservation->occation = $request ->occation;
       $reservation->request = $request ->srequest;

       $reservation->save();
      // return view('admin.master');
       return redirect('/home')->with('reservationmessage',' You Updated Desire Data Succesfully');
    }
    public function deleteresv($id){
      $dltreservation=Reservation::find($id);
      $dltreservation->delete();
      return redirect('/home')->with('reservationmessage','You Deleted Unwanted Data Succesfully');
    }
}
