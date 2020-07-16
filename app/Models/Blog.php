<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable =['title','image','content','status'];


	public function add(){
		$file = request()->upload;
	        $file_name = $file->getClientOriginalName(); 
	        $file->move(public_path('uploads'),$file_name);
	        request()->merge(['image' => $file_name]);

	 	$model = $this->create([
		 	'title' => request()->title,
		 	'image' => $file_name,
		 	'content' => request()->content,
		 	'status' => request()->status
		 ]);
        return $model;
    }
    public function delBlog()
	{
		$this->delete();
	}
	public function editsBlog()
	{
		$file = request()->upload;
	        $file_name = $file->getClientOriginalName(); 
	        $file->move(public_path('uploads'),$file_name);
	        request()->merge(['image' => $file_name]);
		$this->update([
		 	'title' => request()->title,
		 	'image' => $file_name,
		 	'content' => request()->content,
		 	'status' => request()->status
		 ]);
	}
}
