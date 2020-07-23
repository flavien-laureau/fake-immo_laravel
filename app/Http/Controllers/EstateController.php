<?php

namespace App\Http\Controllers;

use App\Estate;
use App\EstateUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estates = Estate::all();
        if (Auth::user()) {
            $estateUser = EstateUser::where("user_id", Auth::user()->id)->get();

            return view('estates.index', [
                'estates' => $estates,
                'selected' => $estateUser
            ]);
        } else {
            return view('estates.index', [
                'estates' => $estates
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estate = Estate::find($id);
        return view('estates.show', [
            'estate' => $estate
        ]);
    }
}
