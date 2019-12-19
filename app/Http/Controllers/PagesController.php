<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    //
    public function home()
    {
    	# code...
    	return view('index');
    }

    public function about()
    {
    	# code...
    	$nama = "Azmi";
    	return view('about',['nama' => $nama]);
    }
}
