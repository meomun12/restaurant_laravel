<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('category.index');

    }
    public function create(){
           return view('category.create');

    }
    public function stores(){

    }
}
