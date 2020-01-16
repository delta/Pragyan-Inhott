<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class RegController extends Controller
{
    public function insert_register(Request $request)
	{
				
		$rollno = Session::get('user_name');
		$name = $request->get('name');
		$hostel = $request->get('hostel');
		$mobile = $request->get('mobile');
		$electrolution = Input::has('electrolution');
		$icudk = Input::has('icudk');;
		$backstabber = Input::has('backstabber');
		$reversecoding = Input::has('reversecoding');
		$fundamental = Input::has('fundamental');
		$dribbletrouble = Input::has('dribbletrouble');
		
		$exists = DB::table('registrations')->where('rollno', $rollno)->get();
		if(count($exists)!=0)
		{
			DB::table('registrations')
            ->where('rollno', $rollno)
            ->update(array(
				'rollno'         => $rollno,
				'name'           => $name,
				'mobile'         => $mobile,
				'hostel'         => $hostel,
				'electrolution'  => $electrolution,
				'icudk'          => $icudk,
				'backstabber'    => $backstabber,
				'reversecoding'  => $reversecoding,
				'fundamental'    => $fundamental,
				'dribbletrouble' => $dribbletrouble));
		}
		else
		{
			DB::table('registrations')->insert(array(

				'rollno' => $rollno,
				'name'   => $name,
				'mobile' => $mobile,
				'hostel' => $hostel,
				'electrolution'    => $electrolution,
				'icudk'          => $icudk,
				'backstabber'    => $backstabber,
				'reversecoding'  => $reversecoding,
				'fundamental'    => $fundamental,
				'dribbletrouble' => $dribbletrouble));	
		}

		return view('final');		
	}

}
