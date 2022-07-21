<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AuthorController extends Controller
{
    public function index(): View
    {
        return view('pages.author.index');
    }

    public function create(): View
    {
        return view('pages.author.form');
    }

    public function store(Request $request): RedirectResponse
    {
        Author::create($request->input());
        return back();
    }

    public function edit(Author $author): View
    {
        return view('pages.author.form', compact('user'));
    }

    public function update(Author $author, Request $request): RedirectResponse
    {
        $author->update($request->input());
        return back();
    }
}
