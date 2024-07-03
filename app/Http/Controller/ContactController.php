<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class ContactController
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        return view('contact');
    }
}
