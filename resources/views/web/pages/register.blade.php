@extends('web/masterview')
@section('style')
	<link rel="stylesheet" type="text/css" href="css/reponsive.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
@endsection
@section('main')
<section>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 pr-30">

						</div>
						<div class="col-md-6">
							<div class="text-title">
								<a  class="text-log" href="{{ route('register') }}">register</a>
								<a href="{{ route('login') }}" >login</a>

							</div>
							<form action="{{ route('postregister') }}" class="form-login" method="post">
								@csrf
								<div class="form-group">
									<label for="pwd">Name</label>
									<input type="text" class="form-control input-2" name="name" id="pwd">
								</div>
								<div class="form-group ">
									<label for="email">Email address *</label>
									<input type="email" class="form-control input-1" name="email" id="email">
								</div>
								<div class="form-group">
									<label for="pwd">Password  *</label>
									<input type="password" class="form-control input-2" name="password" id="pwd">
								</div>
								<div class="checkbox">
									<label><input type="checkbox"> Agree with Terms & Conditions</label>
								</div>

								<button type="submit" class="btn btn-default btn-submit">REGISTER</button>
								
								<div class="form-group">




									
									
									
								</div>
							</form>

						</div>
						<div class="col-md-3 pl-30">
							
						</div>
					</div>
				</div>
			</section>
@stop()