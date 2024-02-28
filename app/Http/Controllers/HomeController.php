<?php

namespace App\Http\Controllers;

use App\Models\Customer_table;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function HomeIndex(){
        return view('Home');
    }
    function DataInsert(Request $request)
    {
        //get all user data from form request
        //id	name	phone	address	total_amount
        $name=$request->input('name');
        $phone=$request->input('phone');
        $address=$request->input('address');
        $total_amount=$request->input('t_amount');
        //echo  'name:'.$name.'<br>phone:'.$phone.'<br>address:'.$address.'<br>t_amount::'.$total_amount;

        $isInsertSuccess=Customer_table::insert(['name'=>$name,
        'phone'=>$phone,
       'address'=>$address,
       'total_amount'=>$total_amount]);
       if( $isInsertSuccess) echo'<h1>Data inserted Successfully</h1>';
       else echo'<h1>Data Not inserted </h1>';
   }
  

   
}

