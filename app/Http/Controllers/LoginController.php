<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $userExists = DB::select('SELECT * FROM users WHERE username = :username AND password = MD5(:password)',
        ["username"=> $request->get("username"), "password"=>$request->get("password")
        ]);
        if(count($userExists) > 0)
        {
            Session::put('loggedInUserID',$userExists[0]->id);
            session(['environment'=>'prod']);
            return redirect()->route("dashboard.index");
        }
        else
        {
            return redirect()->route("login.index")->with('loginError',"Invalid Credentials");
        }
    }

}
