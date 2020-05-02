<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Thujohn\Twitter\Twitter;

class VeilleTechno extends Controller
{
    public function twitterTimeLine(){
        $data = Twitter::getUserTimeLine(['count' => 20, 'format' => 'array']);
        return view('twitter', $data);
    }
}
