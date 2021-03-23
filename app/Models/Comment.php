<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    use HasFactory;

    public function getComments($id)
    {
        return DB::table('comments')
            ->join("users", "comments.user_id", "=", "users.id")
            ->join("posts", "comments.post_id", "=", "posts.id")
            ->where('posts.id',$id)
            ->select('comments.id','comments.comment','comments.user_id','comments.post_id','comments.created_at as CommentDate', 'users.name as userName', 'posts.*')
            ->get();
    }
    public function get()
    {
        return DB::table('comments')
            ->join("users", "comments.user_id", "=", "users.id")
            ->join("posts", "comments.post_id", "=", "posts.id")
            ->select('comments.id','comments.comment','comments.user_id','comments.post_id','comments.created_at as CommentDate', 'users.name as userName', 'posts.title as postTitle')
            ->get();
    }
    public function insert(Request $request, $id)
    {
        $comment = $request->input("comment");

        $query = DB::table('comments');
        $query=$query ->insert(
            ["comment" => $comment,
                "user_id" =>  session()->get('user')->id,
                "post_id" => $id,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ]
        );
        if($query){
            return true;
        }
    }
    public function deleteC($id) {
        DB::table("comments")->where("id", '=', $id)->delete();
    }
}
