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
			<div class="show panel-heading">HIỂN THỊ DANH MỤC</div>
			<div class="panel-body">
				<form action="" method="POST" class="form-inline" role="form">

					<a href="{{ route('blog.create')}}" class="btn btn-success">Add New</a>

				</form>
			</div>
			<!-- Table -->
			<table class="table" id="example1">
				<thead>
					<tr>
						<th>ID</th>
						<th>title</th>
						<th>image</th>
						<th>content</th>
						<th>status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($blogs as $val)
					<tr>
						<td>{{$val->id}}</td>
						<td>{{$val->title}}</td>
						<td><img src="{{url('public')}}/uploads/{{$val->image}}" alt="" width="180px;"></td>
						<td>{{$val->content}}</td>
						<td>{{$val->status}}</td>
						<td>

							<form action="{{ route('blog.destroy',$val->id) }}" method="POST">
								@csrf @method('DELETE')
								<a href="{{ route('blog.edit',['blog'=>$val->id]) }}" class="btn btn-xs btn-primary">Sửa </a>
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