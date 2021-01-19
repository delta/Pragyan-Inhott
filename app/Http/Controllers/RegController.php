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
		$email = $request->get('email');
		// $hostel = $request->get('hostel');
		$hostel ="NA";
		$mobile = $request->get('mobile');
		$scsc = Input::has('scsc');
		$icudk = Input::has('icudk');;
		$codegolf = Input::has('codegolf');
		$hybridhackathon = Input::has('hybridhackathon');
		$fundamental = Input::has('fundamental');
		$caseclosed = Input::has('caseclosed');
		$xrayastro = Input::has('xrayastro');
		$techathlon = Input::has('techathlon');
		// // $dribbletrouble = Input::has('dribbletrouble');
		
		$exists = DB::table('registrations')->where('rollno', $rollno)->get();
		if(count($exists)!=0)
		{
			DB::table('registrations')
            ->where('rollno', $rollno)
            ->update(array(
				'rollno'         => $rollno,
				'name'           => $name,
				'email'           => $email,
				'mobile'         => $mobile,
				'hostel'         => $hostel,
				'scsc'  => $scsc,
				'icudk'          => $icudk,
				'codegolf'    => $codegolf,
				'hybridhackathon'  => $hybridhackathon,
				'fundamental'    => $fundamental,
				'caseclosed'    => $caseclosed,
				'xrayastro'    => $xrayastro,
				'techathlon'    => $techathlon,
				// // 'dribbletrouble' => $dribbletrouble
			));
		}
		else
		{
			DB::table('registrations')->insert(array(

				'rollno' => $rollno,
				'name'   => $name,
				'email'           => $email,
				'mobile' => $mobile,
				'hostel' => $hostel,
				'scsc'    => $scsc,
				'icudk'          => $icudk,
				'codegolf'    => $codegolf,
				'hybridhackathon'  => $hybridhackathon,
				'fundamental'    => $fundamental,
				'caseclosed'    => $caseclosed,
				'xrayastro'    => $xrayastro,
				'techathlon'    => $techathlon,
				// // 'dribbletrouble' => $dribbletrouble
			));	
		}

		return view('final');		
	}

}
