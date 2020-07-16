<?php

namespace App\Http\Controllers\Admin;
use App\Models\ProductDetail;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category; 
use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodetail=ProductDetail::all();
        return view('admin/pages/product/viewProductDetail',[
            'prodetail'=>$prodetail
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pro = Product::where("status",1)->get();
        $color = Color::all();
        $size = Size::all();
        return view("admin/pages/product/addProductDetail",[
            'prodetail'=>$pro,
            'color'=>$color,
            'size'=>$size
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $product_detail = new ProductDetail();
        if($product_detail->store_prodetail()){
            return redirect()->route('productDetail.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prodetail=ProductDetail::where('pro_id',$id)->get();
        return view('admin/pages/product/viewProductDetail',[
            'prodetail'=>$prodetail
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($proDetail_id)
    {
        $product = Product::all();
        $proDetail = ProductDetail::find($proDetail_id);
        $color = Color::all();
        $size = Size::all();
        return view('admin.pages.product.editProductDetail',[
            'prodetail'=>$proDetail,
            'pro'=>$product,
            'color'=>$color,
            'size'=>$size
        ]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $productDetail)
    {
        $prodt =new ProductDetail();  
        if ($prodt->edit_proDetail($productDetail)) {
            return redirect()->route('productDetail.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Image::where('proDetail_id',$id)->delete();
        $product_detail = new ProductDetail();
        $product_detail->delete_proDetail($id);
        return redirect()->route('productDetail.index');
    }
}
