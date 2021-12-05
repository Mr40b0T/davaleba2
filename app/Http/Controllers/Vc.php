<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;
class Vc extends Controller
{
    public function loadCards(){
        $infos = Videos::all();

        return view('videos', compact('infos'));
    }
}
