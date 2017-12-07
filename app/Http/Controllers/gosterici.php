<?php

namespace App\Http\Controllers;

use App\goster;
use Illuminate\Http\Request;

class gosterici extends Controller
{
    function cek()
    {
        $a=goster::get();
        return $a;
    }
}
//DERS.PHP BURASI
