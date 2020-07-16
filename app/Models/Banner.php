<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Banner extends Model
{
   	protected $fillable = ['name','imageUrl','content','UrlOrder','priority'];
 	public function add(){
        $url = request()->imageUrl;
        $ex = pathinfo($url, PATHINFO_EXTENSION);

        $file_name = str_random(4).'-'.str_slug(request()->name).'.'.$ex;

        $file = file_get_contents($url);
        $save = file_put_contents('public/uploadbanner/'.$file_name, $file);

        if ($save) {
        	$model = $this->create([
	   	 	 	'name' => request()->name,
			 	'imageUrl' => request()->imageUrl,
			 	'content' => request()->content,
			 	'UrlOrder' => request()->UrlOrder,
			 	'priority' => request()->priority,
	 	 	]);
        }
 	  	return $model;
   	 }
   	 public function delBanner()
	{
		$this->delete();
	}
   	 public function editsBanner()
	{
		// $file = request()->uploadBanner;
	 //    $file_name = $file->getClientOriginalName(); 
	 //    $file->move(public_path('uploadsBanner'),$file_name);
	 //    request()->merge(['image' => $file_name]);

		$this->update([
		 	'name' => request()->name,
		 	'imageUrl' => request()->imageUrl,
		 	'content' => request()->content,
		 	'UrlOrder' => request()->UrlOrder,
		 	'priority' => request()->priority,
		 ]);
	}
}
