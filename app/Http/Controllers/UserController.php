<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        $users = User::select("id", "name", "email", "phone_number", "shipping_address", "billing_address", "role", "image")
            ->paginate(10);
        return view('Admin.users.index', compact('users'));
    }

    /**
     * Display the specified user details.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('Admin.users.show', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:user,admin',
        ]);

        $user->role = $request->role;
        $user->save();

        return redirect()->route('users.show', $user->id)
            ->with('success', 'User role updated successfully.');
    }
}
