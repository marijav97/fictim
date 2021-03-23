<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends OsnovniController
{
    private $categoryModel;
    private $commentModel;

    public function __construct()
    {
        parent::__construct();
        $this->commentModel=new Comment();
        $this->categoryModel=new Category();
    }

    public function insert(Request $request, $id){
        try{
            $query = $this->commentModel->insert( $request, $id);
            if($query){
                return redirect()->back();
            }
        }
        catch(\PDOException $ex){
            return $ex->getMessage();
        }
    }
}
