
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<base href="{{ asset('public/admin/') }}/" target="_top">
	<title>AdminLTE 2 | Blank Page</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/AdminLTE.css">
	<link rel="stylesheet" href="css/_all-skins.css">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div id="large-header" class="large-header"  style="height: 950px">
		<h1>---Register---</h1>
		<div class="main-agileits">
			<!--form-stars-here-->
			<div class="form-w3-agile">
				<h2>Register Now</h2>
				<form action="{{route('postregister')}}" method="post">
					@csrf
					<div class="form-sub-w3">
						<input type="text" name="name" placeholder="name " required="" />
						<div class="icon-w3">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
					</div>
					<div class="form-sub-w3">
						<input type="text" name="email" placeholder="email " required="" />
						<div class="icon-w3">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
					</div>
					<div class="form-sub-w3">
						<input type="password" name="password" placeholder="password" required="" />
						<div class="icon-w3">
							<i class="fa fa-unlock-alt" aria-hidden="true"></i>
						</div>
					</div>
					<div class="form-sub-w3">
						<input type="password" name="password" placeholder="confirm Password" required="" />
						<div class="icon-w3">
							<i class="fa fa-unlock-alt" aria-hidden="true"></i>
						</div>
					</div>
					
					<a class href="{{route('admin.login')}}">Have an account ?</a></p>
					<div class="clear"></div>
					<div class="submit-w3l"> 
						<input type="submit" value="Register">
					</div>
				</form>
				
			</div>
			<!--//form-ends-here-->
		</div><!-- copyright -->
	</div>
</body>

