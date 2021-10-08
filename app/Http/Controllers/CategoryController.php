<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request){
        return view('admin.category.index');
    }

    public function addForm(){
        return view('admin.category.add');
    }


}
