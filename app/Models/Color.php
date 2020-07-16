<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request; 
class Color extends Model
{
    protected $table = 'color';
    protected $fillable =['color_name','color_picker','color_status'];
    public function store(Request $req)
    {
    	
    	$this->create([
    		'color_name'=>$req->color_name,
            'color_picker'=>$req->color_picker,
    		'color_status'=>$req->status,

    	]);
    }
    public function delete_color($id)
    {
    	$this->where('color_id',$id)->delete();
    }
}
