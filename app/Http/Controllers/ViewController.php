<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('prak2web');
    }

    function showForm()
    {
        return view('form');
    }

    function pengakaranfunc(Request $request)
    {
        return view('response');
    }

    function etspweb()
    {
        return view('input_barang');
    }
}
