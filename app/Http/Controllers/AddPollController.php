<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CloudFunctionCalls\Setters;

class AddPollController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('post'))
        {
            $bannerImage = $request->file('banner_image');
            $params = [
                "poll_title"=>$request['poll_title'],
                "category"=>$request['category'],
                "date_from"=>$request['date_from'],
                "date_to"=>$request['date_to'],
                "time_end"=>$request['time_end'],
                "poll_type"=>$request['poll_type'],
                "note"=>$request['note'],
                "password_enabled"=>($request['password_enabled'] == "on" ? true : false),
                "password"=>$request['password'],
                "limit_suns"=>($request['limit_suns'] == "on" ? true : false),
                "visibility"=>$request['visibility']
            ];

            $response = (new Setters)->addPoll($bannerImage,$params);
            dd($response);
        }
        else
        {
            return view('add_poll',['currentPage'=>'polllist']);
        }
        
    }
}
