<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(): View
    {
        return view('pages.user.index');
    }

    public function store(Request $request): RedirectResponse
    {
        User::create($request->input());
        return back();
    }

    public function edit(User $user): View
    {
        return view('pages.user.form', compact('user'));
    }

    public function update(User $user, Request $request): RedirectResponse
    {
        $user->update($request->input());
        return back();
    }
}
