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
		$funda = Input::has('funda');;
		$huntthecode = Input::has('huntthecode');
		$picktoplace = Input::has('picktoplace');
		$speedcubing = Input::has('speedcubing');
		$theultimatemanager = Input::has('theultimatemanager');
		
		$exists = DB::table('registrations')->where('rollno', $rollno)->get();
		if(count($exists)!=0)
		{
			DB::table('registrations')
            ->where('rollno', $rollno)
            ->update(array(
				'rollno'     => $rollno,
				'name'   => $name,
				'mobile'     => $mobile,
				'hostel'       => $hostel,
				'electrolution'    => $electrolution,
				'funda'     => $funda,
				'huntthecode'    => $huntthecode,
				'picktoplace' => $picktoplace,
				'theultimatemanager'    => $theultimatemanager,
				'speedcubing'    => $speedcubing));
		}
		else
		{
			DB::table('registrations')->insert(array(

				'rollno' => $rollno,
				'name'   => $name,
				'mobile' => $mobile,
				'hostel' => $hostel,
				'electrolution'    => $electrolution,
				'funda'     => $funda,
				'huntthecode'    => $huntthecode,
				'picktoplace' => $picktoplace,
				'theultimatemanager'    => $theultimatemanager,
				'speedcubing'    => $speedcubing));
			
		}

		return view('final');		
	}

}
