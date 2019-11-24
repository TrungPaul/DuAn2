<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('pages.list-post', compact('posts', 'categories'));
    }

    public function view()
    {
        $posts = Post::orderBy('views', 'desc')->get();
        $categories = Category::all();
        return view('pages.list-post', compact('posts', 'categories'));
    }

    public function new()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        return view('pages.list-post', compact('posts', 'categories'));
    }

    public function detail(Post $post_id) {
        $post = Post::find($post_id->id);
        $post->increment('views');
        $posts = Post::where('cate_id', '=', $post->cate_id)->get();
        $comments = Post::find($post_id->id)->comments;
        $new_posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        $categories = Category::all();
        return view('pages.post-detail', compact('post', 'posts', 'new_posts', 'categories', 'comments'));
    }

    public function posts_category($cate_id)
    {
        $posts = Post::where('cate_id', '=', $cate_id)->get();
        $posts_view = Post::orderBy('views', 'desc')->limit(3)->get();
        $categories = Category::all();
        return view('pages.list-post-cate', compact('posts', 'posts_view', 'categories'));
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

    public function search(Request $request) {
        $posts = Post::where('title', 'like', '%' . $request->key . '%')
                        ->orWhere('description', 'like', '%' . $request->key . '%')
                        ->get();
        return view('pages.search', compact('posts'));
    }
}
