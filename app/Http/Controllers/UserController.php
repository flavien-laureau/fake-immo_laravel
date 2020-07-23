<?php

namespace App\Http\Controllers;

use App\User;
use App\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function update(Request $request)
    {

        $user = User::find(Auth::user()->id);
        $address = UserAddress::where('user_id', Auth::user()->id)->firstOrfail();
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');

        $address->line = $request->input('line');
        $address->city = $request->input('city');
        $address->postal_code = $request->input('postal_code');
        $address->country = $request->input('country');

        if ($request->input('password') && $request->input('confirmPassword') && $request->input('password') == $request->input('confirmPassword')) {
            $user->password = Hash::make($request->input('password'));
        }

        if ($request->file('image')) {

            $fileToDelete = 'public/img_users/' . Auth::user()->id . '/' . Auth::user()->image;

            if (Storage::exists($fileToDelete)) {
                Storage::delete($fileToDelete);
            }

            $image = $request->file('image');
            $imageFullName = $image->getClientOriginalName();
            $imageName = pathinfo($imageFullName, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $file = time() . '_' . $imageName . '.' . $extension;
            $image->storeAs('public/img_users/' . Auth::user()->id, $file);
            $user->image = $file;
        }

        $user->save();
        $address->save();

        return redirect()->route('user.profile');
    }
}
