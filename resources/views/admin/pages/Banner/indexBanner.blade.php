@extends('admin/masterview')
@section('style')
<link rel="stylesheet" href="css/addCat.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
@endsection()
@section('main')
	
<div class="content-wrapper">
	<section class="content-header">
		
	</section>
	<section class="content">
		
		<div class="box">
			<div class="box-body">
				<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="show panel-heading">HIỂN THỊ Banner</div>
			<div class="panel-body">
				<form action="" method="POST" class="form-inline" role="form">

					<a href="{{ route('banner.create')}}" class="btn btn-success">Add New</a>

				</form>
			</div>
			<!-- Table -->
			<table class="table" id="example1">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>ImageUrl</th>
						<th>Content</th>
						<th>UrlOrder</th>
						<th>priority</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($Banner as $val)
					<tr>
						<td>{{$val->id}}</td>
						<td>{{$val->name}}</td>
						<td><img src="{{$val->imageUrl}}" alt="" style="width: 150px;"></td>
						<td>{{$val->content}}</td>
						<td>{{$val->UrlOrder}}</td>
						<td>{{$val->priority}}</td>
						<td>

							<form action="{{ route('banner.destroy',$val->id) }}" method="POST">
								@csrf @method('DELETE')
								<a href="{{ route('banner.edit',['banner'=>$val->id]) }}" class="btn btn-xs btn-primary">Sửa </a>
								<button href="" class="btn btn-xs btn-danger">Xóa</button>
							</form>

						</td>
					</tr>
					@endforeach

				</tbody>

			</table>
		</div>
			</div>
		</div>
		
	</section>

	</div>
@endsection()