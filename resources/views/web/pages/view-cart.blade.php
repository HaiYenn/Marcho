@extends('web/masterview')
@section('main')
@if($cart->items)
<div class="pannel panel-default">
	<div  class="panel-heading">Thông Tin Giỏ Hàng</div>
	<table class="table">
		<thead>
			<tr>
				<th>Ảnh</th>
				<th>Tên Sản Phẩm</th>
				<th>Số Lượng</th>
				<th>Đơn Giá</th>
				<th>Thành Tiền</th>
				<th>Hành Động</th>
			</tr>
		</thead>
		<tbody>
			@if(count($cart->items))
			@<?php foreach ($variable as $key => $value): ?>
				
			<?php endforeach ?>($cart->items as $item)
			@php

			$thanhtien = $item['price'] * $item['quantity'];
			@endphp
			<tr>
				<td><img src="{{url('uploads')}}/{{$item['images']}}" width="60" alt=""></td>
				<td>{{$item['pro_name']}}</td>
				<td>
					<form action="{{'update-cart'}}" class="form-inline" role="form">
						<div class="form-group">
							<input type="hidden" name="id" value="{{$item['pro_id']}}">
							<input type="number" value="{{$item['quantity']}}" name="quantity" class="form-control" style="width:80px" />
						</div>
						<button type="submit" class="btn btn-primary btn-xs">Cập Nhật</button>
					</form>
				</td>
				<td>
					{{$item['price']}}
				</td>
				<td>
					{{$thanhtien}}
				</td>
				<td>
					<a href="{{route('delete-cart',$item['pro_id'])}}" class="btn btn-xs btn-danger" onclick="return confirm('bạn có muốn xóa sản phẩm này không?')">Xóa</a>
				</td>
			</tr>
			@endforeach
			@endif
		</tbody>

		<tfoot>
			<tr>
				<td colspan="7" style="text-align: center">
					<a href="" class="btn btn-primary  btn-sm">Tiếp tục mua hàng</a>
					<a href="{{route('delete_all_cart')}}" class="btn btn-danger btn-sm" onclick="return confirm('bạn có muốn xóa hết không')">Xóa hết</a>
					<a href="" class="btn btn-success btn-sm">Đặt Hàng</a>
				</td>
			</tr>
		</tfoot>
	</table>
	@else
	<div class="alert alert-warning">
		<strong>Giỏ Hàng Rỗng</strong>Quý khách vui lòng thêm sản phẩm vào giỏ hàng ...
		<a href="index.php" class="label label-primary">Tiếp tục mua hàng nhé</a>
	</div>
</div>
@endif
@stop()