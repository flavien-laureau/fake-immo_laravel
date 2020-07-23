<?php

namespace App\Http\Controllers;

use App\Estate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('App\Http\Middleware\RolesAuth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estates = Estate::all();
        return view('backoffice.index', [
            'estates' => $estates
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estate = new Estate;
        $estate->title = $request->input("title");
        $estate->type = $request->input("type");
        $estate->description = $request->input("description");
        $estate->rooms = $request->input("rooms");
        $estate->square_meters = $request->input("squareMeters");
        $estate->price = $request->input("price");
        $estate->admin_id = Auth::user()->id;

        $image = $request->file('image');
        $imageFullName = $image->getClientOriginalName();
        $imageName = pathinfo($imageFullName, PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();
        $file = time() . '_' . $imageName . '.' . $extension;
        $image->storeAs('public/img_estates', $file);

        $estate->image = $file;
        $estate->save();
        return redirect()->route('admin.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estate = Estate::find($id);

        return view('backoffice.edit', [
            'estate' => $estate
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estate = Estate::find($id);
        $estate->title = $request->input("title");
        $estate->type = $request->input("type");
        $estate->description = $request->input("description");
        $estate->rooms = $request->input("rooms");
        $estate->square_meters = $request->input("squareMeters");
        $estate->price = $request->input("price");

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageFullName = $image->getClientOriginalName();
            $imageName = pathinfo($imageFullName, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $file = time() . '_' . $imageName . '.' . $extension;
            $image->storeAs('public/img_estates', $file);
            $estate->image = $file;
        }

        $estate->save();
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estate = Estate::find($id);
        $fileToDelete = 'public/img_estates/' . $estate->image;

        if (Storage::exists($fileToDelete)) {
            Storage::delete($fileToDelete);
        }

        $estate->delete();

        return redirect()->route('admin.index');
    }
}
