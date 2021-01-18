<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;

class HomeController extends Controller
{
    function index()
    {
        return view('UserProduk.home');
    }

    function testAjax()
    {
        $data['list_provinsi'] = Provinsi::all();
        return view('test-ajax', $data);
    }
}
