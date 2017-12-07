<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullaniciController extends Controller
{
    public function getIndex($slug)
    {
       return  view('kullanicilar');
    }
}
