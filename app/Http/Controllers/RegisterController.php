<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
   function showform()
   {
	  // print_r('get method');
	   return view('register');
   }
    function signup(Request $request)
   {
	  //print_r('post method');
	  //dd($request);
	  //print_r($request->all());
	  
	  //print_r($request->input('name'));
	  //print_r($request->input('email'));
	 // print_r($request->input('password'));
	 
	 //print_r($request->name);
	 //print_r($request->email);
	 //print_r($request->password);
	
	 //$input=$request->input();
	 
	 $validate=$request->validate(
	 ['name'=>'required|min:10',
	 'email'=>'required',
	 'password'=>'required']);
	 
	 print_r('form validate');
	 $input=$request->except('_token');
	 //print_r($input);
	   return view('register',['data'=>$input]);
   }
}
