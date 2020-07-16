<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{   
	protected $table = 'payment';
    protected $fillable =['type','status'];

    public function store($request)
    {
       $this->create([
            'type'=>$request->type,
            'status'=>$request->status, 
        ]);
    }

    public function delete_payment($id)
    {
       $this->where('id',$id)->delete();
    }
    public function edit_payment($id){
        $this->where('id',$id)->update([
            'type'=>request()->type,
            'status'=>request()->status, 
        ]);
    }
   
}
