<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{   
	protected $table = 'comment';
    protected $fillable =['id','pro_id','name','email','content'];

    public function store($request , $pro_id , $id = null)
    {
       $this->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'content'=>$request->content,
            'pro_id'=>$pro_id,
            'id'=>$id,
        ]);
    }

    public function delete_comment($id)
    {
       $this->where('id',$id)->delete();
    }
    public function edit_comment($id){
        $this->where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'content'=>$request->content,

        ]);
    }
   
}
