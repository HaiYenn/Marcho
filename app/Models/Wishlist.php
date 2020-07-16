<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Wishlist extends Model
{
    protected $table = 'wishlists';
    protected $fillable =['user_id','product_id'];

	public function user(){
	   return $this->belongsTo(User::class);
	}

	public function product(){
	   return $this->belongsTo('App\Models\Product','product_id','pro_id');
	}
	public function insertdata($id)
	{
		$data = $this->create([
			'user_id'=>Auth::user()->id,
			'product_id'=>$id
		]);
		return $data;
	}
	public function count_wishlist($id)
	{
		return count($this->where('product_id',$id)->get());
	}
}
