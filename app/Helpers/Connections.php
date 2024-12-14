<?php


namespace App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class Connections{
    
    function runFunction($functionName,$params)
    {
        $functionsURL = $this->getFunctionURL();
        try{
            $response = Http::get("$functionsURL/$functionName/$params");
            return $response->json();
        }catch(RequestException $e)
        {
            return dd($e->getMessage());
        }
    }

    public function getFunctionURL()
    {
        //DEV FUNCTION URLS
        define("LOCAL_DEV_FUNCT_URL", "http://127.0.0.1:5001/post-d335d/us-central1");
        define("HOSTED_DEV_FUNCT_URL" , "https://us-central1-post-d335d.cloudfunctions.net");
        //LIVE FUNCTION URLS
        define("LOCAL_LIVE_FUNCT_URL", "http://127.0.0.1:5001/vote-71958/us-central1");
        define("HOSTED_LIVE_FUNCT_URL" , "https://us-central1-vote-71958.cloudfunctions.net");
        //HOSTS
        define("LIVE_HOST" , "juancast.ph");
        if($_SERVER['HTTP_HOST'] == "127.0.0.1:8000" || $_SERVER['HTTP_HOST'] == "localhost:8000")
        {
            if(session("environment") =="dev")
            {
                return LOCAL_DEV_FUNCT_URL;
            }
            else {
                
                return LOCAL_LIVE_FUNCT_URL;
            }
        }
        else if($_SERVER['HTTP_HOST'] == LIVE_HOST)
        {
            if(session("environment") =="dev")
            {
                return HOSTED_DEV_FUNCT_URL;
            }
            else {
                
                return HOSTED_LIVE_FUNCT_URL;
            }
        }
    }
}