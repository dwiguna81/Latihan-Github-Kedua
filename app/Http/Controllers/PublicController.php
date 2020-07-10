<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function test()
    {
        return view('test');
    }

    public function test2()
    {
        return view('test2');
    }

    public function test3()
    {
        return view('test3');
    }
}
