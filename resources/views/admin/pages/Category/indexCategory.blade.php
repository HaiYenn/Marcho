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

					<a href="{{ route('category.create')}}" class="btn btn-success">Add New</a>

				</form>
			</div>
			<!-- Table -->
			<table class="table" id="example1">
				<thead>
					<tr>
						<th>ID</th>
						<th>Cat_name</th>
						<th>description</th>
						<th>priority</th>
						<th>cat_status</th>
						<th width="50px;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach($cats as $model)
					<tr>
						<td>{{$model->id}}</td>
						<td>{{$model->cat_name}}</td>
						<td>{!!$model->description!!}</td>
						<td>{{$model->priority}}</td>
						<td>{{ ($model->cat_status == 1 ?"Còn" : "Hết") }}</td>
						<td>

							<form action="{{ route('category.destroy',$model->id) }}" method="POST">
								@csrf @method('DELETE')
								<a href="{{ route('category.edit',['category'=>$model->id]) }}" class="btn btn-xs btn-primary"><i style="width: 25px;" class="fa fa-edit"></i></a>
								<a href="" class="btn btn-xs btn-danger"><i style="width: 25px;" class="fa fa-trash"></i></a>
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