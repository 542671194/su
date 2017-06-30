<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class siteController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('site.about');
    }

    public function test(){
        return view('test.page');
    }
}
