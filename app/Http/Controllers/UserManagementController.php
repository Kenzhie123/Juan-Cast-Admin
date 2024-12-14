<?php

namespace App\Http\Controllers;
use App\CloudFunctionCalls\Getters;

class UserManagementController extends Controller
{

    public function index()
    {
        return view('user_management',["currentPage"=>"usermanagement","users"=>(new Getters)->getAllUsers()]);
    }
}
