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
		$lineFollower = Input::has('lineFollower');;
		$pragyanDesignChallenge = Input::has('pragyanDesignChallenge');
		$greenTech = Input::has('greenTech');
		$electrolution = Input::has('electrolution');
		$huntTheCode = Input::has('huntTheCode');
		$theUltimateManager = Input::has('theUltimateManager');
		$waterRocket = Input::has('waterRocket');
		$sanrachana = Input::has('sanrachana');
		
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
				'lineFollower'     => $lineFollower,
				'pragyanDesignChallenge'   => $pragyanDesignChallenge,
				'greenTech'      => $greenTech,
				'electrolution'    => $electrolution,
				'huntTheCode'    => $huntTheCode,
				'theUltimateManager'    => $theUltimateManager,
				'bytecodeJunior'    => $bytecodeJunior,
				'waterRocket'    => $waterRocket,
				'sanrachana'    => $sanrachana));
		}
		else
		{
			DB::table('registrations')->insert(array(

												'rollno'     => $rollno,
												'name'   => $name,
												'mobile'     => $mobile,
												'hostel'       => $hostel,
												'lineFollower'     => $lineFollower,
												'pragyanDesignChallenge'   => $pragyanDesignChallenge,
												'greenTech'      => $greenTech,
												'electrolution'    => $electrolution,
												'huntTheCode'    => $huntTheCode,
												'theUltimateManager'    => $theUltimateManager,
												'waterRocket'    => $waterRocket,
												'sanrachana'    => $sanrachana));
			
		}

		return view('final');
			
		
		
	}



	

	
	

}
