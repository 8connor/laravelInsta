<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{
    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function patch(User $user)
    {
        $data = " ";

        return redirect("/profile/" . auth()->user()->id);
    }

    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }
}
