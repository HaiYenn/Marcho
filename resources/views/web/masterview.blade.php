<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<base href="{{ asset('public/web/') }}/" target="_top">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="owl-carousel/owl.theme.default.min.css">	
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/header-footer.css">
	@yield('style')
</head>
<body>
	@include('web/layout/header')
	<!-- /header -->
	@yield('main')

	@include('web/layout/footer')
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="owl-carousel/owl.carousel.js"></script>
<script src="fontawesome/js/all.js"></script>
<script src="src/jquery.star-rating-svg.js"></script>
<script src="js/myJs.js"></script>

<script type="text/javascript">
	$(function() {

  	// basic use comes with defaults values
  	$(".my-rating").starRating({
    	initialRating: 0.0,
    	starSize: 25
  	});
  	
	});
	$('.add').click(function () {
		if ($(this).prev().val() < 5) {
    	$(this).prev().val(+$(this).prev().val() + 1);
		}
});
$('.sub').click(function () {
		if ($(this).next().val() > 1) {
    	if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
		}
});
</script>


@yield('script')



</html>
