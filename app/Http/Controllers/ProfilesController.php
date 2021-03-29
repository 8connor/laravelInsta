<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{
    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function patch()
    {
        $userId = auth()->user()->id;

        $user = User::findOrFail($userId);

        $data = request()->all();

        $user->update($data);

        return redirect("/profile/" . $userId);
    }

    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }
}
