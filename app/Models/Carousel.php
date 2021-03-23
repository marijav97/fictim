<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Carousel extends Model
{
    use HasFactory;

    public function getCarouselsCat(){
        $query=DB::table('carousels');
        $query=$query->join('categories','carousels.category_id','=','categories.id');
        $query=$query->select('carousels.*', 'categories.name as catName');
        return $query->get();
    }
}
