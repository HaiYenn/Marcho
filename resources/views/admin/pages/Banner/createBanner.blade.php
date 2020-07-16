@extends('admin/masterview')
@section('style')
<link rel="stylesheet" href="css/addCat.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
@endsection()
@section('main')
<div class="content-wrapper">
	@if(Session::has('no'))
		<div class="alert alert-danger alert-dismissible">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>Success!</strong>{{Session::get('no')}}
		</div>
		@endif
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="show panel-heading">Thêm Banner</div>
		<div class="panel-body">
	
			<form enctype="multipart/form-data" action="{{ route('banner.store')}}" method="POST" role="form">
				@csrf
				<div class="form-group @error('name') has-error @enderror">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" placeholder="Input field" value="{{old('name')}}">
					@error('name')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group @error('imageUrl') has-error @enderror">
					<label for="">ImageUrl</label>
					<input type="text" class="form-control" name="imageUrl" placeholder="Input field" value="{{old('imageUrl')}}">
					@error('imageUrl')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>

	
				<div class="form-group @error('content') has-error @enderror">
					<label for="">Content</label>
					<textarea id="editor1" name="content" class="form-control" rows="3" placeholder="Input content">{{old('content')}}</textarea>
					@error('content')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group @error('UrlOrder') has-error @enderror">
					<label for="">UrlOrder</label>
					<input type="text" class="form-control" name="UrlOrder" placeholder="Input field" value="{{old('UrlOrder')}}">
					@error('UrlOrder')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group @error('priority') has-error @enderror">
					<label for="">Priority</label>
					<input type="text" class="form-control" name="priority" placeholder="Input Priority">
					@error('priority')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
					
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		
		
	</div>
</div>
@endsection()