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

    public function create(): View
    {
        return view('pages.user.create');
    }

    public function edit(User $user): View
    {
        return view('pages.user.edit', compact('user'));
    }

    public function show(User $user): View
    {
        return view('pages.user.show', compact('user'));
    }
}
