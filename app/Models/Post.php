<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["title", "intro", "content", "image", "category_id"];

    public function getPosts(Request $request){
        $query = DB::table("posts");

        /* JOINS */
        $query=$query->join('categories','posts.category_id','=','categories.id');
        $query=$query->join('users','posts.user_id','=','users.id');


        /* WHERE */
        if($request->has("categoryIds")){
            $query=$query->where("posts.category_id","=",$request->get("categoryIds"));
        }
        if($request->has("keyword")){
            $query=$query->where("posts.title","like","%". $request->get("keyword") ."%");
        }

        /* SELECT */
        $query=$query->select('posts.*', 'categories.name as catName','users.name as userName')->orderBy('posts.created_at','desc');


        /* SORTS */
        if($request->has("sortBy")) {
            $query = $query->orderBy($request->get("sortBy"));
        } else {
            $query = $query->orderBy("posts.title");
        }

        if($request->has("paginate")) {
            //perPage - broj zapisa po strani
            //page - trenutna strana

            $perPage = $request->has("perPage") ? $request->get("perPage") : 10;
            $page = $request->has("page") ? $request->get("page") : 1;

            $totalCount = $query->count();

            $query = $query->take($perPage);

            $offset = ((int)$page - 1) * $perPage;

            $query = $query->skip($offset);

            $pagedResponse = new \stdClass();

            $pagedResponse->items = $query->get();

            $pagedResponse->pagesCount = ceil($totalCount / $perPage);

            return $pagedResponse;
        }

        return $query->paginate(6);
    }
    /*public function getOnePost($postId){
        return DB::table("posts")
            ->where("id", $postId)
            ->first();
    }*/
    public function getTopPosts(){
        return DB::table('posts')
            ->select('title','created_at')
            ->orderBy('created_at','desc')
            ->limit('3')
            ->get();
    }
    public static function uploadImage($image){
        $path = Storage::disk('public')->putFile('storage/assets/images', $image);
        $exploded = explode('/', $path);
        return $exploded[count($exploded) - 1];
    }
    public function insert($post){
        $lastPostId = DB::table("posts")->max("id");

        $post["id"] = $lastPostId + 1;

        DB::table("posts")->insert($post);
    }
    public static function deleteImage($image){
        Storage::disk('public')->delete('assets/images/' . $image);
    }
    public function find($id) {

        return DB::table("posts")
            ->join('categories','posts.category_id','=','categories.id')
            ->join('users','posts.user_id','=','users.id')
            ->where("posts.id", $id)
            ->select('posts.*','categories.name as catName','users.name as UserName')
            ->get()
            ->first();
    }
    public function deleteP($id) {
        DB::table("posts")->where("id", '=', $id)->delete();
    }
    public function findCat($id){
        return DB::table("posts")->where("id", '=', $id)->first();
    }
}
