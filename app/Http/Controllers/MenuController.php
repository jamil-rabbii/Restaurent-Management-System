<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialmenu;

class MenuController extends Controller
{
     public function save(Request $request){
		$menu = new Specialmenu;
		$menu ->pictures = 'picture';
		$menu ->PlatterName = $request->input('pname');
		$menu ->item_1 = $request->input('item_1');
		$menu ->price_1 = $request->input('price_1');
		$menu ->item_2 = $request->input('item_2');
		$menu ->price_2 = $request->input('price_2');
		$menu ->item_3 = $request->input('item_3');
		$menu ->price_3 = $request->input('price_3');
		$menu ->item_4 = $request->input('item_4');
		$menu ->price_4 = $request->input('price_4');
		$menu ->item_5 = $request->input('item_5');
		$menu ->price_5 = $request->input('price_5');
		$menu -> save();

        /*img insert start*/

		$lastID = $menu->id;
		$Menu_Pic_Info =$request ->file('pictures');
		/*echo "<pre>";
		 print_r($Menu_Pic_Info);
		echo "</pre>";*/

		$MenuPicName =$lastID.$Menu_Pic_Info->getClientOriginalName();
		/*echo $MenuPicName;*/
   
        $folder = "MenuImg/";

        $Menu_Pic_Info -> move($folder, $MenuPicName);
        $MenuPicURL = $folder.$MenuPicName;
        $MenuPic =Specialmenu::find($lastID);
        $MenuPic-> pictures =$MenuPicURL;
        $MenuPic-> save();
		return redirect('/home')->with('insertmenu','succesfully inserted');


		/*\DB::table('specialmenus')->insert([
    	['name'=>$name, 'address'=>$address, 'date'=>$date, 'foodnumber'=>$foodnumber,'time'=>$time,'person'=>$person]
	]);*/
   }
   public function edit($id){
       $menuedit=Specialmenu::where('id',$id)->first();
       return view('admin.edit.specialmenuedit',['specialmenu'=>$menuedit]);
   }
     public function update(Request $request){
      /*$feedback = $request->input('id');*/
      //echo $request->id;
       $menu=Specialmenu::find($request->id);
       $menu->pictures = $request ->pictures;
       $menu->PlatterName = $request ->pname;
       $menu->item_1 = $request ->item_1;
       $menu->price_1 = $request ->price_1;
       $menu->item_2 = $request ->item_2;
       $menu->price_2 = $request ->price_2;
       $menu->item_3 = $request ->item_3;
       $menu->price_3 = $request ->price_3;
       $menu->item_4 = $request ->item_4;
       $menu->price_4 = $request ->price_4;
       $menu->item_5 = $request ->item_5;
       $menu->price_5 = $request ->price_5;

       $menu->save();
       $lastID = $menu->id;
	   $Menu_Pic_Info =$request ->file('pictures');
		/*echo "<pre>";
		 print_r($Menu_Pic_Info);
		echo "</pre>";*/

		$MenuPicName =$lastID.$Menu_Pic_Info->getClientOriginalName();
		/*echo $MenuPicName;*/
   
        $folder = "MenuImg/";

        $Menu_Pic_Info -> move($folder, $MenuPicName);
        $MenuPicURL = $folder.$MenuPicName;
        $MenuPic =Specialmenu::find($lastID);
        $MenuPic-> pictures =$MenuPicURL;
        $MenuPic-> save();

      // return view('admin.master');
       return redirect('/home')->with('menumsz',' You Updated Desire Data Succesfully');
    }

   public function deletemenu($id){
      $dltmenu=Specialmenu::find($id);
      $dltmenu->delete();
      return redirect('/home')->with('menumsz','You Deleted Unwanted Data Succesfully');
    }
 }
