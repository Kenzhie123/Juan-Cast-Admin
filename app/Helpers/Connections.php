<?php
//LIVE
// define("DEV_FUNCT_URL", "http://127.0.0.1:5001/vote-71958/us-central1");
// define("LIVE_FUNCT_URL" , "https://us-central1-vote-71958.cloudfunctions.net");

namespace App\Helpers;

class Connections{
    
    public function getFunctionURL()
    {
        //LIVE DEV
        define("DEV_FUNCT_URL", "http://127.0.0.1:5001/post-d335d/us-central1");
        define("LIVE_FUNCT_URL" , "https://us-central1-post-d335d.cloudfunctions.net");

        //HOSTS
        define("LIVE_HOST" , "juancast.ph");
        define("DEV_HOST", "127.0.0.1");
        if($_SERVER['HTTP_HOST'] == "127.0.0.1:8000" || $_SERVER['HTTP_HOST'] == "localhost:8000")
        {
            return DEV_FUNCT_URL;
        }
        else if($_SERVER['HTTP_HOST'] == LIVE_HOST)
        {
            return LIVE_FUNCT_URL;
        }
    }
}