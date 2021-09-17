<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function perkantoran(){
        return view('perkantoran');
    }
    public function laboratorium(){
        return view('laboratorium');
    }
    public function kelas(){
        return view('kelas');
    }
    public function lainnya(){
        return view('lainnya');
    }
}
