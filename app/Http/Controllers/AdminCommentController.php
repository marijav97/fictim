<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminCommentController extends OsnovniController
{
    private $commentModel;
    private $postsModel;

    public function __construct()
    {
        parent::__construct();
        $this->postsModel = new Post();
        $this->commentModel=new Comment();
    }
    public function index(Request $request)
    {
        $this->data["posts"]=$this->postsModel->getPosts($request);
        $this->data["comments"] = $this->commentModel->get();
        return view('admin.comments.index',$this->data);
    }
    public function destroy($id)
    {
        try {
            $this->commentModel->deleteC($id);

            return response()->redirectToRoute("comments.index");

        }catch (\Exception $ex) {
            dd($ex->getMessage());
            Log::error($ex->getMessage());
            return response()->redirectToRoute("error");
        }
    }
}
