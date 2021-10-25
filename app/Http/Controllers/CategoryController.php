<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\components\Recusive;

class CategoryController extends Controller
{
    public function index(Request $request){
        $pagesize = 5;
        $searchData = $request->except('page');
        // dd($request->all());
        if (count($request->all()) == 0) { //lấy ra danh sách sp
            $category = Category::paginate($pagesize);
        } else {
            $categoryQuery = Category::where('name', 'like', '%' . $request->keyword . "%");
            $category = $categoryQuery->paginate($pagesize)->appends($searchData);
        }
        $category = $this->category->latest()->paginate(5);
        // return view('admin.category.index', compact('categories'));
        return view(
            'admin.category.index',
            [
                'categories' => $category,
                'searchData' => $searchData
            ]
        );
    }
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function add(){
        // $data = $this->category->all();
        // $recusive = new Recusive($data);
        // $htmlOption = $recusive->categoryRecusive();
        $htmlOption = $this->getCategory('id');
        return view('admin.category.add' ,compact('htmlOption'));
    }
    public function store(Request $request){
        $model = new Category();
        $model->fill($request->all());
        $model->save();
        return redirect(route('category.index'));
    }

    public function delete($id){
        Category::destroy($id);
        return redirect()->back();
    }

    public function getCategory($parentId){
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }

    public function edit($id){
    //    $category = $this->category->find($id);

    //    $data = $this->category->all();
    //    $recusive = new Recusive($data);
    //    $htmlOption = $recusive->categoryRecusive();
    $htmlOption = $this->getCategory($id);
    return view('admin.category.edit', compact('htmlOption', 'category'));    
    }
    public function save($id, Request $request){
        $model = Category::find($id);
        if (!$model) {      
            return  redirect()->back();
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('category.index'));
    }
}
   