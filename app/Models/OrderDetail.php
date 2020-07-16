<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;

class OrderDetail extends Model
{
    protected $table = 'order_detail';
    protected $fillable =['order_id','prodetail_id','quantity','amount'];
    public function store($order_id,$prodetail_id,$quantity,$amount)
    {
        $this->create([
            'order_id'=>$order_id,
            'prodetail_id'=>$prodetail_id,
            'quantity'=>$quantity,
            'amount'=>$amount
        ]);
    }
    public function delete_color($id)
    {
    	$this->where('color_id',$id)->delete();
    }
    public function products()
    {
        return $this->belongsTo('App\Models\ProductDetail', 'prodetail_id', 'proDetail_id');
    }
}
