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
		// $hostel = $request->get('hostel');
		$hostel ="NA";
		$mobile = $request->get('mobile');
		$scsc = Input::has('scsc');
		$icudk = Input::has('icudk');;
		$codegolf = Input::has('codegolf');
		$hybridhackathon = Input::has('hybridhackathon');
		$fundamental = Input::has('fundamental');
		// // $dribbletrouble = Input::has('dribbletrouble');
		
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
				'scsc'  => $scsc,
				'icudk'          => $icudk,
				'codegolf'    => $codegolf,
				'hybridhackathon'  => $hybridhackathon,
				'fundamental'    => $fundamental,
				// // 'dribbletrouble' => $dribbletrouble
			));
		}
		else
		{
			DB::table('registrations')->insert(array(

				'rollno' => $rollno,
				'name'   => $name,
				'mobile' => $mobile,
				'hostel' => $hostel,
				'scsc'    => $scsc,
				'icudk'          => $icudk,
				'codegolf'    => $codegolf,
				'hybridhackathon'  => $hybridhackathon,
				'fundamental'    => $fundamental,
				// // 'dribbletrouble' => $dribbletrouble
			));	
		}

		return view('final');		
	}

}
