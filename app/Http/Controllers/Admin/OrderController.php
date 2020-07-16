<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 
 */
class OrderController extends Controller
{
	public function order_index()
	{
		$orders = Order::all();
		return view('admin.pages.Order.viewOrder',[
			'orders'=>$orders
		]);
	}

	public function orderDetail_index($id){
		$orderDetail = OrderDetail::where("order_id", $id)->get();
		return view('admin.pages.Order.viewOrderdetail',[
			'orderDetail'=>$orderDetail
		]);
	}

}