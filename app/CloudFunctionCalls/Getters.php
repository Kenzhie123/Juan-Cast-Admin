<?php

namespace App\CloudFunctionCalls;

use App\Helpers\Connections;

class Getters{


    public function getAllUsers()
    {
        return (new Connections)->runGetFunction("getAllUsers","");
    }
    function getAllPolls()
    {
        return (new Connections)->runGetFunction("getAllPolls","");
    }

    function getPollInfoFull($pollID)
    {
        return (new Connections)->runGetFunction("getPollInfoFull",$pollID);
    }

    function getAllArtists()
    {
        return (new Connections)->runGetFunction("getAllArtists","");
    }

    function getSpecArtistInfo($artistID)
    {
        return (new Connections)->runGetFunction("getSpecArtistInfo",$artistID);
    }
    function getSpecUserInfo($userID)
    {
        return (new Connections)->runGetFunction("getSpecUserInfo",$userID);
    }
}