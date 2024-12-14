<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CloudFunctionCalls\Getters;

class EditArtistController extends Controller
{
    public function index(Request $request)
    {
        $artistID = $request->query('artist_id');
        return view('edit_artist',['currentPage'=>'artist_list','artistInfo'=>(new Getters)->getSpecArtistInfo($artistID)]);
        // return view('edit_artist',['currentPage'=>'artist_list']);
    }
}
