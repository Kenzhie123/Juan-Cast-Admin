<?php

namespace App\CloudFunctionCalls;

use App\Helpers\Connections;

class Getters{


    public function getAllUsers()
    {
        return (new Connections)->runFunction("getAllUsers","");
    }
    function getAllPolls()
    {
        return (new Connections)->runFunction("getAllPolls","");
    }

    function getPollInfoFull($pollID)
    {
        return (new Connections)->runFunction("getPollInfoFull",$pollID);
    }

    function getAllArtists()
    {
        return (new Connections)->runFunction("getAllArtists","");
    }

    function getSpecArtistInfo($artistID)
    {
        return (new Connections)->runFunction("getSpecArtistInfo",$artistID);
    }
}