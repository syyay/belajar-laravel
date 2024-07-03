<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }
}
