<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CloudFunctionCalls\Getters;

class PollListController extends Controller
{


    public function index()
    {
        return view('poll_list',['currentPage'=>'polllist','pollList'=>(new Getters)->getAllPolls()]);
        // return view('poll_list',['currentPage'=>'polllist']);
    }
}
