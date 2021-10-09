<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request){
        return view('admin.category.index');
    }

    private $htmlSelect;
    public function __construct()
    {
        $this->htmlSlelect = '';
    }
    public function addForm(){
       
        // foreach ($data as $value) {
        //     if ($value['parent_id'] == 0) {
        //         echo " <option>". $value['name'] ."</option>";

        //         foreach ($data as $value2) {
        //             if ($value2['parent_id'] == $value['id']){
        //             echo " <option>". $value2['name'] ."</option>";

        //             foreach ($data as $value3) {
        //                 if ($value3['parent_id'] == $value2['id']){
        //                 echo " <option>". $value3['name'] ."</option>";
        //                 }
        //             }
        //         }
        //     }
        // }
        $htmlOption = $this->categoryRecusive(id:0);
        return view('admin.category.add' ,compact('htmlOption'));
        
    }


    function categoryRecusive($id, $text = '')
    {
        $data = Category::all();
        foreach ($data as $value) {
            if ($value['parent_id'] == $id){
                $this->htmlSelect .= " <option>". $text . $value['name'] ."</option>";
                $this->categoryRecusive($value['id'], $text. '-');
            }
        }
    return $this->htmlSelect;
    }
}
