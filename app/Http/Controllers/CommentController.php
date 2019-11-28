<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Reply;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ReplyRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function add(CommentRequest $request)
    {	
        $data = $request->except('_token');
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $comment = new Comment();
        if (Auth::check()) {
            $comment->name = $data['name'];
            $comment->user_id = $data['user_id'];
            $comment->avatar = $data['avatar'];
        }
        $comment->name = $data['name'];
        $comment->post_id = $data['post_id'];
        $comment->content =  $data['content'];
        $comment->created_at = $dt;
        
        $comment->save();
        return redirect()->back()->with('message', 'Đăng bình luận thành công!');
    }

    public function reply(Request $request)
    {	
        $data = $request->except('_token');
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $comment = new Reply();
        if (Auth::check()) {
            $comment->name = $data['name'];
            $comment->user_id = $data['user_id'];
            $comment->avatar = $data['avatar'];
        } else {
            $comment->name = $data['reply_name'];
        }
        $comment->comment_id = $data['comment_id'];
        $comment->content =  $data['reply_content'];
        $comment->created_at = $dt;
        
        $comment->save();
        return redirect()->back()->with('message_reply', 'Trả lời bình luận thành công!');
    }
}
