<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CloudFunctionCalls\Getters;

class ArtistListController extends Controller
{
    public function index()
    {
        return view('artist_list',['currentPage'=>'artist_list',"artists"=>(new Getters)->getAllArtists()]);
    }
}
