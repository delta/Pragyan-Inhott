<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ScoreBoard;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ViewController extends Controller
{
    public function index()
    {
        $scores = ScoreBoard::all();
        return view("home", compact('scores'));
    }
    
    public function updatePoints()
    {
        $hostel_list = ["Diamond","Agate","Coral","Jade","Opal"];

        $query = "update points set points = 0";
        DB::statement($query);

        for($i=1;$i<=8;$i++)
        {
            $scores = ScoreBoard::findOrFail($i);
            
            $first = $scores->first;
            $second = $scores->second;
            $third = $scores->third;

            if(!in_array($first,$hostel_list)||!in_array($second,$hostel_list)||!in_array($third,$hostel_list))
                continue;

            $p1 = ["hostel"=>$first,"val"=>0];
            $p2 = ["hostel"=>$second,"val"=>0];
            $p3 = ["hostel"=>$third,"val"=>0];

            if($i==1) // Line Follower
            {
                $p1["val"] = 15;
                $p2["val"] = 10;
                $p3["val"] = 7;
            }
            else if ($i==7) // water rocket
            {
                $p1["val"] = 7;
                $p2["val"] = 5;
                $p3["val"] = 3;
            }
            else if ($i==8) // Sanrachana
            {
                $p1["val"] = 5;
                $p2["val"] = 3;
                $p3["val"] = 2;
            }
            else // everything else
            {
                $p1["val"] = 10;
                $p2["val"] = 7;
                $p3["val"] = 5;
            }
            // Run the update
            $q1 = DB::update('update points set points = points + :val where hostel = :hostel',$p1);
            $q2 = DB::update('update points set points = points + :val where hostel = :hostel',$p2);
            $q3 = DB::update('update points set points = points + :val where hostel = :hostel',$p3);
        }

    }

    public function scores(Request $request)
    {
        if(Session::has('admin_login'))
        {
            $scores = ScoreBoard::findOrFail($request->id);
            $scores->update($request->all());

            $this->updatePoints();

        }
        
        return redirect('/');
    }

    public function login()
    {
        return view("login");
    }

    public function register()
    {
        if(!Session::has('user_name'))
        {
            return Redirect::to('login')->with('message', 'Please Login to register');
        }
        else
        {
            return view('register');
        }
    }

    public function getPoints()
    {
        $t = DB::select("select * from points");
        // echo json_encode($t);
        return response()->json($t);
    }

    public function electrolution()
    {
        return view('events.electrolution');
    }

    public function incaseyoudidntknow()
    {
        return view('events.incaseyoudidntknow');
    }

    public function backstabber()
    {
        return view('events.backstabber');
    }

    public function reversecoding()
    {
        return view('events.reversecoding');
    }

    public function fundamental()
    {
        return view('events.fundamental');
    }

    public function dribbletrouble()
    {
        return view('events.dribbletrouble');
    }
    
    public function fromwannabetotrader()
    {
        return view('workshops.fromwannabetotrader');
    }

    public function aiml()
    {
        return view('workshops.aiml');
    }
}
