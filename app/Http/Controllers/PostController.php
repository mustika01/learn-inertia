<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Support\DefaultPermissions;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function __construct()
    {
        //admin
        $this->middleware('can:' . DefaultPermissions::VIEW_POST, ['only' => ['index', 'show']]);
        $this->middleware('can:' . DefaultPermissions::CREATE_POST, ['only' => ['create', 'store']]);
        $this->middleware('can:' . DefaultPermissions::UPDATE_POST, ['only' => ['edit', 'update']]);
        $this->middleware('can:' . DefaultPermissions::DELETE_POST, ['only' => ['destroy']]);
    }

    public function index()
    {
        $posts = Post::all();

        return Inertia::render(
            'Admin/Posts',
            [
                'posts' => $posts
            ]
        );
    }

    public function create()
    {
        // $data = Post::all();
        $data = Post::latest()->get();
        return Inertia::render('Admin/Posts/CreatePost', ['data' => $data]);
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        $msg = "New post created";
        return redirect('admin/posts')->with('msg', $msg);
    }

    public function show(Post $post)
    {
        return Inertia::render('Admin/Posts/ViewPost', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return Inertia::render('Admin/Posts/EditPost', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        sleep(1);

        return redirect()->route('posts.index')->with('message', 'Post Updated Successfully');

    }

    public function destroy(Post $post)
    {
        $post->delete();
        sleep(1);

        return redirect()->route('posts.index')->with('message', 'Post Delete Successfully');
    }


}
