<?php

namespace App\CloudFunctionCalls;
use App\Helpers\Connections;

class Setters{
    public function addPoll($bannerImage,$params)
    {
        return (new Connections)->runPostFunction('addPoll',$bannerImage,$params);
    }
}