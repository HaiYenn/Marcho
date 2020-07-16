<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request; 
class Image extends Model
{
    protected $table = 'image';
    protected $fillable =['image_url','proDetail_id'];
   
}
