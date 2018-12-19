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
		$elemental = Input::has('elemental');;
		$bytecode = Input::has('bytecode');
		$bridgebrigadier = Input::has('bridgebrigadier');
		$waterrocket = Input::has('waterrocket');
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
				'elemental'     => $elemental,
				'bytecode'    => $bytecode,
				'bridgebrigadier' => $bridgebrigadier,
				'theultimatemanager'    => $theultimatemanager,
				'waterrocket'    => $waterrocket));
		}
		else
		{
			DB::table('registrations')->insert(array(

				'rollno' => $rollno,
				'name'   => $name,
				'mobile' => $mobile,
				'hostel' => $hostel,
				'electrolution'    => $electrolution,
				'elemental'     => $elemental,
				'bytecode'    => $bytecode,
				'bridgebrigadier' => $bridgebrigadier,
				'theultimatemanager'    => $theultimatemanager,
				'waterrocket'    => $waterrocket));
			
		}

		return view('final');		
	}

}
