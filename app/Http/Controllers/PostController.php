<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('pages.list-post', compact('posts'));
    }

    public function detail(Post $post_id) {
        $post = Post::find($post_id->id);
        $new_posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        $categories = Category::all();
        return view('pages.post-detail', compact('post', 'new_posts', 'categories'));
    }

    public function show()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('pages-spa.list-post', compact('posts'));
    }

    public function add()
    {	
        $category = Category::all();
    	return view('pages-spa.add-post', compact('category'));
    }

    public function create_post(Request $request)
    {	
        $data = new Post;
        $data->fill($request->all());
        if ($request->hasFile('image')) {
            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('posts', $filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect()->route('list-post');
    }

    public function edit(Post $id) 
    {
        $cate = Category::all();
        return view('pages-spa.edit-post', ['post' => $id], ['cate' => $cate]);
    }

    public function update_post(Request $request)
    {
        $post = Post::find($request->id);
        $post->where('id', $request->id)->update([
            'cate_id' => $request->cate_id,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        if ($request->hasFile('image')) {
            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('posts', $filename);
            $post->image = $filename;
        }
        $post->save();
        return redirect()->route('list-post');
    }
}
