<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prduct;

class ProductController extends Controller
{
    public function index()
    {
        $product = users::all();
        return view("product.index");
    }

}
