<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
class Welcome extends Controller
{
    //

    public function index()
    {
        $peoples="";
        $response = Curl::to('https://swapi.co/api/people/')
            ->get();
        if(isset($response))
        {
            $peoples= json_decode($response,TRUE)['results'];
        }


        return view('welcome')->with('peoples',$peoples);
    }
}
