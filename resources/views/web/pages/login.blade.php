@extends('web/masterview')
@section('style')
	<link rel="stylesheet" type="text/css" href="css/reponsive.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
@endsection
@section('main')
@if(Session::has('ms'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('ms') }}</p>
@endif
	<section>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 pr-30">

						</div>
						<div class="col-md-6">
							<div class="text-title">
								<a href="{{ route('register') }}" >register</a>
								<a class="text-log" href="{{ route('login') }}">login</a>

							</div>
							<form action="{{ route('user.postlogin') }}" method="post" class="form-login">
								@csrf
								<div class="form-group ">
									<label for="email">Username or email address *</label>
									<input type="email" class="form-control input-1" name="email" id="email">
								</div>
								<div class="form-group">
									<label for="pwd">Password *</label>
									<input type="password" class="form-control input-2" name="password" id="pwd">
								</div>
								<div class="checkbox">
									<label><input type="checkbox"> Remember me</label>
								</div>

								<button type="submit" class="btn btn-default btn-submit">LOG IN</button>

								<div class="form-group">


									<a href="#">Lost your password ?</a>
								</div>
							</form>

						</div>
						<div class="col-md-3 pl-30">

						</div>
					</div>
				</div>
			</section>
@stop()