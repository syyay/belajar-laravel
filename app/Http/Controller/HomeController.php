<?php


namespace App\Http\Controller;


class HomeController extends Controller
{
    public function __invoke()
    {
        return view(view:'home');
    }
}