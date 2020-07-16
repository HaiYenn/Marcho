<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
class Order extends Model
{
    protected $table = 'order';
    protected $fillable =['total_amount','order_status','user_id','payment_id'];
    public function store($total,$status,$user_id,$pay)
    {
        $model = $this->create([
            'total_amount'=>$total,
            'order_status'=>$status,
            'user_id'=>$user_id,
            'payment_id'=>$pay
        ]);
        return $model;
    }
    public function customer()
    {
        return $this->hasOne('App\Models\InforUser', 'id', 'user_id');
    }
}
