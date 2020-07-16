<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
class InforUser extends Model
{
    protected $table = 'info_user';
    protected $fillable =['name','country','address','email','phone','note'];
    public function store(Request $req)
    {
        $id_user = (Auth::check())?Auth::user()->id:null;
    	$model = $this->create([
    		'name'=>$req->name,
            'country'=>$req->country,
    		'address'=> "Từ " .$req->address. " Đên ".$req->address2,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'note'=>$req->note,
            'id_user'=>$id_user
    	]);
        return $model;
    }
    public function delete_color($id)
    {
    	$this->where('color_id',$id)->delete();
    }
}
