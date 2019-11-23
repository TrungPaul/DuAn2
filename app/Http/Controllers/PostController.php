<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Comment;
use App\Service;
use App\Spa;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 1)->orderBy('id', 'desc')->paginate('6');
        $categories = Category::all();
        return view('pages.list-post', compact('posts', 'categories'));
    }

    public function view()
    {
        $posts = Post::orderBy('views', 'desc')->paginate('6');
        $categories = Category::all();
        return view('pages.list-post', compact('posts', 'categories'));
    }

    public function new()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate('6');
        $categories = Category::all();
        return view('pages.list-post', compact('posts', 'categories'));
    }

    public function detail(Post $post_id) {
        $post = Post::find($post_id->id);
        $comments = Post::find($post_id->id)->comments;
        $new_posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        $categories = Category::all();
        return view('pages.post-detail', compact('post', 'new_posts', 'categories', 'comments'));
    }

    public function show()
    {
        $posts = Post::all();
        return view('admin.post.list_post', compact('posts'));
    }

    public function add()
    {
        $category = Category::all();
    	return view('admin.post.add_post', compact('category'));
    }

    public function create_post(PostRequest $request)
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
        return redirect()->route('admin.listpost')->with('message_add', 'Thêm bài viết thành công!');
    }

    public function edit(Post $id)
    {
        $cate = Category::all();
        return view('admin.post.edit_post', ['post' => $id], ['cate' => $cate]);
    }

    public function update_post(PostRequest $request)
    {
        $post = Post::find($request->id);
        $post->where('id', $request->id)->update([
            'cate_id' => $request->cate_id,
            'title' => $request->title,
            'description' => $request->description,
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
        return redirect()->route('admin.listpost')->with('message_edit', 'Sửa bài viết thành công!');
    }

    public function change_status(Request $request) 
    {
        $post = Post::find($request->id);
        $post->where('id', $request->id)->update([
            'status' => 1,
        ]);
        $post->save();
        return redirect()->route('admin.listpost')->with('message_change_status', 'Thay đổi trạng thái bài viết thành công!');
    }
    public function change_status_b(Request $request) 
    {
        $post = Post::find($request->id);
        $post->where('id', $request->id)->update([
            'status' => 0,
        ]);
        $post->save();
        return redirect()->route('admin.listpost')->with('message_change_status', 'Thay đổi trạng thái bài viết thành công!');
    }
    public function delete(Post $id)
    {
        $id->delete();
        return redirect()->back()->with('message_delete', 'Xoá bài viết thành công!');
    }
}
