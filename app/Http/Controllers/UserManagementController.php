<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Helpers\Connections;
class UserManagementController extends Controller
{

    public function getAllUsers()
    {
        $functionsURL = (new Connections)->getFunctionURL();
        try{
            $response = Http::get("$functionsURL/getAllUsers");
            return $response->json();
        }catch(RequestException $e)
        {
            return dd($e->getMessage());
        }

        // return [];
    }
    public function index()
    {
        return view('user_management',["currentPage"=>"usermanagement","users"=>$this->getAllUsers()]);
    }
}
