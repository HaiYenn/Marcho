<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class User extends Model
{
    public function wishlist(){
    	$user_id = Auth::user()->id;
       	return $this->hasMany('App\Models\Wishlist', 'user_id', 'id');
    }
}