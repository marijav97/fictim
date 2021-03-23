<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class OsnovniController extends Controller
{
    public $data;

    public function __construct()
    {
        $this->data["menu"] = Menu::getMenu();
    }
}
