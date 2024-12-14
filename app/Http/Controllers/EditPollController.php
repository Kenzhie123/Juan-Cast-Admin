<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CloudFunctionCalls\Getters;

class EditPollController extends Controller
{
    public function index(Request $request)
    {
        $pollID = $request->query('pollID');
        return view('edit_poll',['currentPage'=>'polllist','pollInfo'=>(new Getters)->getPollInfoFull($pollID)]);
        // return view('edit_poll',['currentPage'=>'polllist']);
    }
}
