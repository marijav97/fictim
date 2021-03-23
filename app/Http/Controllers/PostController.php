<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends OsnovniController
{
    private $postsModel;
    private $categoriesModel;
    private $commentModel;

    public function __construct()
    {
        parent::__construct();
        $this->postsModel= new Post();
        $this->categoriesModel = new Category();
        $this->commentModel=new Comment();
    }
    public function index(Request $request)
    {

        $this->data["posts"] = $this->postsModel->getPosts($request);
        $this->data["categories"] = $this->categoriesModel->getCategories();
        $this->data["topPosts"]=$this->postsModel->getTopPosts();
        return view('pages.posts.index', $this->data);
    }
    public function show(Request $request,$id)
    {
        $post =$this->postsModel->find($id);
        $this->data["post"] = $post;
        $this->data["posts"] = $this->postsModel->getPosts($request);
        $this->data["checkedCat"] = $request->get("categoryIds") ? $request->get("categoryIds") : [];
        $this->data["categories"] = $this->categoriesModel->getCategories();
        $this->data["comments"] = $this->commentModel->getComments($id);
        return view('pages.posts.show', $this->data);
    }
    public function create()
    {
        $this->data["categories"] = $this->categoriesModel->getCategories();
        return view('pages.posts.create', $this->data);
    }
    public function store(CreatePostRequest $request)
    {
        try{

            $image = $request->file("image");
            $user_id=$request->session()->get('user')->id;


            $fileName = uniqid() . "_" . time() . "." . $image->extension();

            $image->storeAs("public/assets/images", $fileName);

            $postToInsert = $request->all();

            $postToInsert["image"] = $fileName;
            $postToInsert["user_id"]=$user_id;

            $this->postsModel->insert($postToInsert);

            return response()->redirectToRoute("posts");
        }
        catch (\Exception $e)
        {
            \Log::error($e->getMessage());
            return response()->redirectToRoute("error");
        }
    }

    public function edit(Post $post){
        $this->data["post"] = $post;
        $this->data["categories"] = $this->categoriesModel->getCategories();
        $this->data["topPosts"]=$this->postsModel->getTopPosts();

        return view('pages.posts.edit',$this->data);
    }
    public function update(PostUpdateRequest $request, Post $post){
        try
        {
            $post->update($request->except('image'));

            if($request->has('image')){
                //$image = Product::uploadImage($request->image);
                Post::deleteImage($post->image);
                $newImage = Post::uploadImage($request->image);
                $post->image = $newImage;
                $post->save();
            }

            DB::commit();

            return redirect()->route('posts', $post->id)->with('success', 'Post edited successfully!');
        }
        catch(Exception $e)
        {
            DB::rollBack();
            return redirect()->route('pages.posts.edit', $post->id)->with('errorMessage', 'An error occurred!');
        }
    }
    public function destroy($id)
    {
        try {
            $this->postsModel->deleteP($id);

            return response()->redirectToRoute("posts");

        }catch (\Exception $ex) {
            dd($ex->getMessage());
            Log::error($ex->getMessage());
            return response()->redirectToRoute("error");
        }
    }

}
