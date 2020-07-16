@extends('web/masterview')
@section('style')
<link rel="stylesheet" type="text/css" href="css/reponsive.css">
<link rel="stylesheet" type="text/css" href="css/cart-page.css">
<style type="text/css" media="screen">
	.cell{
		vertical-align: middle !important;
	}
</style>
@endsection
@section('main')
<link rel="stylesheet" type="text/css" href="">
<section class="container pt-70">
		@if(session()->has('success'))
		    <div class="alert alert-warning">
		        {{ session()->get('success') }}
		    </div>
		@endif
		<div class="row">


			<table class="table">
				<caption></caption>
				<thead >
					<tr >
						<td>Product Name</td>
						<td>Unit Price</td>
						<td>Quantity</td>
						<td>Total</td>
						<td></td>
					</tr>	
					
				</thead>
				<tbody>
					@if(count($cart->items))
					@foreach($cart->items as $item)
					@php
					$thanhtien = $item['price'] * $item['quantity'];
					@endphp
					<tr >
						<form action="{{ route('update-cart') }}" class="form-inline" method="get" role="form">
						<td class="col-md-4 cell">
							<div class="col-md-12 p-0">
								<img src="{{url('public/upload')}}/{{$item['images']}}" width="50%" style="margin-right: 30px;" alt="">
								      {{$item['pro_name']}}
							</div>
							
						</td>
						<td class="col-md-2 cell">
							{{$item['price']}}
						</td>
						<td class="col-md-2 cell">
								<div class="form-group">
									<input type="hidden" name="id" value="{{$item['pro_id']}}">
									<input type="number" value="{{$item['quantity']}}" name="quantity" class="form-control" style="width:80px" />
								</div>
								
						</td>
						<td class="col-md-2 cell">{{$thanhtien}}</td>
						<td class="col-md-2 cell">
							<a href="{{route('delete-cart',$item['pro_id'])}}" class="btn btn-xs btn-danger" onclick="return confirm('bạn có muốn xóa sản phẩm này không?')">Xóa</a>
							<button type="submit" class="btn btn-primary btn-xs">Cập Nhật</button>
						</td>
						</form>
					</tr>
					@endforeach
					
				</tbody>

				<div class="pt-40">
					<hr>
				</div>

			</table>

			<div class="pt-40 "> 
				<a href="{{route('delete_all_cart')}}" class="btn btn-danger btn-sm" onclick="return confirm('bạn có muốn xóa hết không')">Clear Shopping Cart</a>
				<a href="{{ route('shop_list') }}" class="btn btn-primary  btn-sm">Continue Shopping</a>

			</div>
			
		</div>


		<div class="row">
			<div class="col-md-6 pl-0">
				<div class="coupon-cart">
					<div class="coupon_cd clearfix">
						<p>Coupon Cart</p>
						<input type="text" name="" placeholder="Enter coupon code">
						<button type="button" class="btn btn-default btn-apply mt-30" >APPLY</button>
					</div>

				</div>
			</div>
			<div class="col-md-6 ">
				<div class="coupon-cart">
					<div class="coupon_cd clearfix">
						<p> Cart total</p>

						<div class="list-total">
							<ul>
								<li>
									<p>Subtotal</p>
									<span>999.00$</span>
								</li>

								<li>
									<p>Shipping cost</p>
									<span>00.00$</span>
								</li>
								<li>

									<p>Total</p>
									<span>999.00$</span>
								</li>
							</ul>
						</div>

						<a class="btn btn-default btn-proceed btn-checkout mt-30" href="{{ route('checkout') }}">PROCEED TO CHECK OUT</a>

					</div>
				</div>

			</div>
		</div>
</section>
@else
<div class="alert alert-warning">
	<strong>Giỏ Hàng Rỗng</strong>Quý khách vui lòng thêm sản phẩm vào giỏ hàng ...
	<a href="{{ route('home') }}" class="label label-primary">Tiếp tục mua hàng nhé</a>
</div>
@endif
@stop()