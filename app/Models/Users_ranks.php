<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request; 
class Users_ranks extends Model
{
    protected $table = 'users_ranks';
    protected $fillable =['id','proDetail_id','rank'];
   
}
