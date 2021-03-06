<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Permission;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index');
    }
    public function create()
    {
        $categories = Category::all();
        return view('posts.create',['categories'=>$categories,'tags'=>Tag::all()]);
    }

    public function store(PostRequest $request)
    {
        $posts=Post::query()->create([
            'title'=>$request->get('title'),
            'short_content'=>$request->get('short_content'),
            'content'=>$request->get('content'),
            'category_id'=>$request->get('category_id'),
            'status'=>$request->get('status'),
        ]);
        $posts->tags()->attach($request->get('tags'));
        return redirect()->route('posts.index');
    }

    public function index()
    {
        $posts = Post::all();
        return view ('posts.index',compact('posts'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit',['post'=>$post,'categories'=>$categories,'tags'=>Tag::all()]);
    }

    public function update(PostRequest $request , Post $post)
    {
        $post->update([
            'title'=>$request->get('title'),
            'short_content'=>$request->get('short_content'),
            'content'=>$request->get('content'),
            'category_id'=>$request->get('category_id'),
            'status'=>$request->get('status'),
        ]);
        $post->tags()->sync($request->get('tags'));
        return redirect()->route('posts.index');
    }
    public function destroy(Post $post)
    {
        $post->tags()->detach();
        $post->delete();
        return redirect()->route('posts.index');
    }
}
