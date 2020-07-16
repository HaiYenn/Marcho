<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table='categories';
    protected $fillable =['cat_name','description','priority','parent_id','cat_status'];



/**
*
* @return 
*/

	public function add(){
	 	$model = $this->create([
		 	'cat_name' => request()->cat_name,
		 	'description' => request()->description,
		 	'priority' => request()->priority,
		 	'cat_status' => request()->cat_status
		 ]);
        return $model;
}

	// public function products(){
	// 	return $this->hasMany(Product::class,'')
	// }
	public function delCat($id)
	{
		$this->where('id',$id)->delete();
	}public function editsCat($id)
	{
		$this->where('id',$id)->update([
		 	'cat_name' => request()->cat_name,
		 	'description' => request()->description,
		 	'priority' => request()->priority,
		 	'cat_status' => request()->cat_status
		 ]);
	}
	
}	

