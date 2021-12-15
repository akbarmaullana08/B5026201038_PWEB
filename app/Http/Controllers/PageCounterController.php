<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class PageCounterController extends Controller
{
    public function view(Request $request)
    {
        //dapatkan jumlah

        $Jumlah = $request->Jumlah;

        //tampilkan jumlah
        $pagecounter = DB::table('pagecounter')

        Post::find($Jumlah)->increment();

        return view('uas.index',['detail'=> $detail]);
    }
}


