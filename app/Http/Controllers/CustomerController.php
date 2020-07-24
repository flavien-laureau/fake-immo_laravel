<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function select($id)
    {
        Auth::user()->customerEstatesSelect()->attach($id);


        return redirect()->route('estates.index');
    }

    public function unselect($id)
    {
        Auth::user()->customerEstatesSelect()->detach($id);


        return redirect()->route('estates.index');
    }
}
