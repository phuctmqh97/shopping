<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CategoryController extends Controller
{
    public function index(Request  $request){
        $cates = category::all();
        return view('admin.category.index', ['cates'=> $cates]);
    }
    public function addForm(){
        $cates = category::all();
        return view('admin.category.add', compact('cates'));
    }
    public function saveForm(Request $request){
        $model = new category();
        $model->fill($request->all());
        $model->save();
      

    }
}
