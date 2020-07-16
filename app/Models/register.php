<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash; 
class Register extends Authenticatable
{
    protected $table = 'users';
    protected $fillable =['name','email','email_verified_at','password','is_super','status','remember_token'];
    public function add($req)
    {
        $model = $this->create([
            'name'=>$req->name,
            'email'=>$req->email, 
            'password'=>Hash::make($req->password) ,
            'is_super'=> 0  ,
            'status'=>1, 
        ]);
        return $model;
    }

}
