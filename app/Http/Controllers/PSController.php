<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PSController extends Controller
{
    public function ti(){
        return view('PSTI');
    }
    public function mi(){
        return view('PSMI');
    }
}
