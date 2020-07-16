@extends('admin/masterview')
@section('style')
<link rel="stylesheet" href="css/addCat.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
@endsection()
@section('main')
<div class="content-wrapper">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="show panel-heading">Sửa Danh Mục</div>
		<div class="panel-body">
	
			<form enctype="multipart/form-data" action="{{ route('blog.update',['blogs'=>$blogs->id])}}" method="POST"  role="form">
				@csrf
				@method('PUT')
				<div class="form-group @error('title') has-error @enderror">
					<label for="">Title</label>
					<input type="text" class="form-control" name="title" placeholder="Input field" value="{{ $blogs->title }}">
					@error('title')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group">
					<label for="">Image</label>
					<input type="file" class="form-control" name="upload" placeholder="Input field">
					@error('upload')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
	
				<div class="form-group @error('content') has-error @enderror">
					<label for="">Content</label>
					<textarea  id="editor1" name="content" class="form-control" rows="3" placeholder="Input content">{{ $blogs->content }}</textarea>
					@error('content')
						<small class="error help-block">{{$message}}</small>
					@enderror
				</div>
				
	
				<div class="form-group">
					<label for="">Status</label>
					<div class="radio">
						<div class="radio">
							<label>
								<input type="radio" name="status" value="1" checked>Show
							</label>
							<label>
								<input type="radio" name="status" value="0">Hide
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