<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends OsnovniController
{
    public $carouselsModel;
    public $categoriesModel;
    public $postsModel;

    public function __construct()
    {
        parent::__construct();
        $this->carouselsModel = new Carousel();
        $this->postsModel = new Post();
        $this->categoriesModel = new Category();
    }

    public function index(Request $request){
        $this->data["checkedCat"] = $request->get("categoryIds") ? $request->get("categoryIds") : [];
        $this->data["carousels"]=$this->carouselsModel->getCarouselsCat();
        $this->data["categories"] = $this->categoriesModel->getCategories();
        $this->data["posts"]=$this->postsModel->getPosts($request);
        $this->data["topPosts"]=$this->postsModel->getTopPosts();

        return view('pages.main.index',$this->data);
    }

}
