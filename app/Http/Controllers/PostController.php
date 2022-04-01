<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index(): View
    {
        return view('pages.post.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->merge(['user_id' => $request->user()->id]);
        Post::create($request->input());
        return back();
    }

    public function delete(Post $post): RedirectResponse
    {
        $post->delete();

        return back();
    }
}
