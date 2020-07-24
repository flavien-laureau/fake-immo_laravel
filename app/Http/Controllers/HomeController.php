<?php

namespace App\Http\Controllers;

use App\Estate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $estates = Estate::limit(5)->get();

        return view('index', [
            'estates' => $estates
        ]);
    }
}
