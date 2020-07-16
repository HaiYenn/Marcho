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
	
			<form enctype="multipart/form-data" action="{{ route('banner.update',['banner'=>$banner->id])}}" method="POST" role="form">
				@csrf
				@method('PUT')
				<div class="form-group @error('name') has-error @enderror">
					<label for="">Name</label>
					<input type="text" class="form-control" value="{{$banner->name}}" name="name" placeholder="Input field" value="{{old('name')}}">
					@error('name')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group @error('imageUrl') has-error @enderror">
					<label for="">ImageUrl</label>
					<input type="text" class="form-control" value="{{$banner->imageUrl}}" name="imageUrl" placeholder="Input field" value="{{old('imageUrl')}}">
					@error('imageUrl')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
				

	
				<div class="form-group @error('content') has-error @enderror">
					<label for="">Content</label>
					<textarea id="editor1" name="content" class="form-control" rows="3" placeholder="Input content">{{$banner->content}}</textarea>
					@error('content')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group @error('UrlOrder') has-error @enderror">
					<label for="">UrlOrder</label>
					<input type="text" class="form-control" value="{{$banner->UrlOrder}}" name="UrlOrder" placeholder="Input field" value="{{old('UrlOrder')}}">
					@error('UrlOrder')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group @error('priority') has-error @enderror">
					<label for="">Priority</label>
					<input type="text" class="form-control" value="{{$banner->priority}}" name="priority" placeholder="Input Priority">
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