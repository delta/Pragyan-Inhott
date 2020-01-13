<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AdminAuthController extends Controller {

	public function login(Request $request)
	{
       if($request->session()->has('admin_login')) {
        return redirect('admin/home');
       }

	   return view('admin_login');
	}

	public function auth(Request $request)
	{
		$username=$request->get('username'); 
		$password=$request->get('password');
		echo $username." ".$password;

		$admin = DB::table('admin_auth')->where('admin_email', $username)
                            ->first();
		if ($admin) {
      if (md5($password) === $admin->admin_pass) {
				Session::put('admin_login','true');
        return redirect('admin/home');
      } else {
				return redirect('admin/login')->with('message', 'Incorrect Username or Password');
      }
    } else {
        return redirect('/admin/login')->with('message', 'Not a registered admin');
    }
	}

	

	public function admin_home(Request $request)
	{
		$details = DB::select('select * from registrations');

		//var_dump($details);
		//die();
        
        if($request->session()->has('admin_login')) {
		    return view('admin_home',compact('details'));//return view page to be displayed
        }
        
        return redirect('/admin/login');
	}

}
