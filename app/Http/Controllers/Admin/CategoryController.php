<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\CategoryAddRequest as CatAddReq;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::orderBy('priority','asc')->get();
        // dd($cats);

        return view('admin.pages.Category.indexCategory',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.Category.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatAddReq $request, Category $category)
    {
        $model = $category->add();

        if($model) {
            return redirect()->route('category.index')->with('yes','thêm mới danh mục thành công');
        }else{
            return redirect()->back()->with('no','thêm mới danh mục không thành công');
        }       
        // $request->offsetUnset('_token');
        // // dd($request->all());
        
        // $model = Category::create($request->all());
        // dd($model);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

        return view('admin/pages/Category/EditCategory',[
            'category'=>$category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $cat = new Category();
        $cat->editsCat($category->id);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $cat = new Category();
        $cat->delCat($category->id);
        return redirect()->route('category.index');
    /**
     * khi xóa dữ liệu bảng cha, => check dữ liệu bảng con
     */
    
    }

}
