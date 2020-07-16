<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductDetail;
class Product extends Model
{   
	protected $table = 'product';
    protected $primaryKey  = 'pro_id';
    protected $fillable =['pro_name','title','status','cat_id','price','images'];

    public function store_pro()
    {
         $file = request()->upload;
         $file_name = rand(11111, 99999).'.'.$file->getClientOriginalName(); 

         $file->move(public_path('upload'),$file_name);

    	$status = Request()->status; 
    	
    	$arr=[
            'pro_name'=>Request()->pro_name,
            'title'=>Request()->title,
            'status'=>$status ,
            'price' =>Request()->price,
            'cat_id'=>Request()->categorys,
            'images'=>$file_name
        ];
        return $this->create($arr);
    }

    public function delete_pro($id)
    {
    	$this->where('pro_id',$id)->delete();
    }
    public function edit_pro(){

        $file = request()->upload;
        $file_name = $file->getClientOriginalName(); 
        $file->move(public_path('upload'),$file_name);
        request()->merge(['images' => $file_name]);
        $status = Request()->status; 
        
        $arr=[
            'pro_name'=>Request()->pro_name,
            'title'=>Request()->title,
            'status'=>$status,
            'price' =>Request()->price,
            'cat_id'=>Request()->categorys,
            'images'=>$file_name
        ];
        return $this->update($arr);
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category','cat_id','id');
    }
    
    public function listimage()
    {
        return $this->hasOne('App\Models\Image','proDetail_id','pro_id');
    }
    public function product_detail()
    {
        return $this->hasOne('App\Models\ProductDetail','proDetail_id','pro_id');
    }
    public function sale_price($id)
    {
        $sale = ProductDetail::where('proDetail_id',$id)->first();
        $pr = $this->where('pro_id',$id)->first();
        return ($sale->discount==null)?0:$sale->discount *  ($pr->price/100);
    }
    public function wishlist(){
     return $this->hasMany(Wishlist::class);
  }
}
