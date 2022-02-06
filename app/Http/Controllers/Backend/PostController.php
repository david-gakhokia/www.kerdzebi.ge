<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:post-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:post-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $posts = Post::withTranslation()
            ->translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('backend.posts.create');
    }

    public function store(StorePostRequest $request)
    {
        Post::create($request->validated() + [
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function store2(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $input = $request->except(['_token']);

        Post::create($input);

        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
        ]);

        $post = Post::find($id);

        $post->update($request->all());

        return redirect()->route('posts.index')
        ->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();

        return redirect()->route('posts.index')
        ->with('success', 'Post deleted successfully.');
    }
}
