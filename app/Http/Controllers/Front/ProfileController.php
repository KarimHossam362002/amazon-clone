<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\Front\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function update(ProfileRequest $request)
    {
        $user = Auth::user();

        $request->validated();

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->shipping_address = $request->shipping_address;
        $user->billing_address = $request->billing_address;

        $user->save();

        return back()->with('success', 'Profile updated successfully.');
    }
}
