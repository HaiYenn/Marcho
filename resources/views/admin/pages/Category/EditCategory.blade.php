@extends('admin/masterview')
@section('style')
<link rel="stylesheet" href="css/addCat.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
@endsection()
@section('main')
<div class="content-wrapper">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="show panel-heading"> Sửa Danh Mục</div>
		<div class="panel-body">
	
			<form action="{{ route('category.update',['category'=>$category->id])}}" method="POST" role="form">
				@csrf
				@method('PUT')
				<div class="form-group @error('cat_name') has-error @enderror">
					<label for="">Name</label>
					<input type="text" class="form-control" value="{{$category->cat_name}}" name="cat_name" placeholder="Input field" value="{{old('cat_name')}}">
					@error('cat_name')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
	
				<div class="form-group @error('description') has-error @enderror">
					<label for="">Description</label>
					<textarea name="description" class="form-control"  rows="3" placeholder="Input description">{!!$category->description!!}</textarea>
					@error('description')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group @error('priority') has-error @enderror">
					<label for="">Priority</label>
					<input type="text" class="form-control" value="{{$category->priority}}" name="priority" placeholder="Input Priority">
					@error('priority')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
	
				<div class="form-group">
					<label for="">Status</label>
					<div class="radio">
						<div class="radio">
							<label>
								<input type="radio" name="cat_status" value="1" checked>Show
							</label>
							<label>
								<input type="radio" name="cat_status" value="0">Hide
							</label>
						</div>
					</div>
				</div>
				
				
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		
		
	</div>
</div>
@endsection()