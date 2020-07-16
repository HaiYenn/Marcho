<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class ProductDetail extends Model
{
	protected $table = 'product_detail';
    protected $primaryKey ="proDetail_id";
    protected $fillable =['description','discount','quantity','view','size_id','color_id','pro_id'];



    public function store_proDetail()
    {
        // dd("asdsa");
        $files = Request()->litsimage;

        // dd(Request()->color_id);
    	$arr=[
            'description'=>Request()->description,
            'discount'=>Request()->discount,
            'quantity'=>Request()->quantity ,
            'size_id'=>Request()->size_id ,
            'color_id'=>Request()->color_id ,
            'pro_id'=>Request()->pro_id,
            // 'proDetail_id'=>''
        ];
        $pro = $this->create($arr);
        $arrayFile = [];
        foreach ($files as $value) {
            $namefile = $value->getClientOriginalName();
            $value->move('public/upload', $value->getClientOriginalName());
            array_push($arrayFile,$namefile);
        }
        // dd($pro->proDetail_id);
        Image::create([
            'image_url'=>json_encode($arrayFile),
            'proDetail_id'=>$pro->proDetail_id,
        ]);
        return $pro;
    }

    public function delete_proDetail($id)
    {
    	$this->where('proDetail_id',$id)->delete();
    }
    public function edit_proDetail($id){
        $status = 1; 
        if (Request()->status != null) {
            $status = 0;
        }
        
        if (Request()->litsimage != null) {
            if (Image::where('proDetail_id',$id)->first() == null) {
                $files = Request()->litsimage;
                $arrayFile = [];
                foreach ($files as $value) {
                    $namefile = $value->getClientOriginalName();
                    $value->move('public/upload', $value->getClientOriginalName());
                    array_push($arrayFile,$namefile);
                }
                Image::create([
                    'image_url'=>json_encode($arrayFile),
                    'proDetail_id'=>$id,
                ]);
            }else{
                $files = Request()->litsimage;
                $arrayFile = [];
                foreach ($files as $value) {
                    $namefile = $value->getClientOriginalName();
                    $value->move('public/upload', $value->getClientOriginalName());
                    array_push($arrayFile,$namefile);
                }
                Image::where('proDetail_id',$id)->update([
                    'image_url'=>json_encode($arrayFile)
                ]);
            }
        }

        $arr=[
            'color_id'=>Request()->color_id,
            'pro_id'=>Request()->pro_id,
            'size_id'=>Request()->size_id,
            'description'=>Request()->description,
            'discount'=>Request()->discount,
            'quantity'=>Request()->quantity ,
            'view'=>Request()->view,
        ];

        return $this->where('proDetail_id',$id)->update($arr);
    }
    public function product()
    {
        return $this->belongsTo('App\Models\Product','pro_id','pro_id');
    }
    public function size()
    {
        return $this->belongsTo('App\Models\Size','size_id','size_id');
    }
    public function color()
    {
        return $this->belongsTo('App\Models\Color','color_id','color_id');
    }    
    public function images()
    {
        return $this->belongsTo('App\Models\Image','proDetail_id','proDetail_id');
    }
}
