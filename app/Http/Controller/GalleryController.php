<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('gallery');
    }
}
