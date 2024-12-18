<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CloudFunctionCalls\Getters;

class UserInformationController extends Controller
{
    public function index(Request $request)
    {
        $userID = $request->query('userid');

        return view('user_information',['currentPage'=>'usermanagement','userData'=>(new Getters)->getSpecUserInfo($userID)]);
        
    }
}
