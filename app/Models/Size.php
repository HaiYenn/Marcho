<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request; 
class Size extends Model
{
    protected $table = 'size';
    protected $fillable =['size_name','size_status'];
    public function store(Request $req)
    {
    	
    	$this->create([
    		'size_name'=>$req->name,
    		'size_status'=>$req->status, 
    	]);
    }
    public function delete_size($id)
    {
    	$this->where('size_id',$id)->delete();
    }
}
