@extends('web/masterview')
@section('style')
	<link rel="stylesheet" type="text/css" href="css/notfound.css">
@endsection
@section('main')
 <section>

     	<div class="container">
     		 <div class="row">
     		 	 <div class="col-md-6">
     		 	 	<p class="text-false">OPPS! Page Not Found!!</p>
     		 	 	<p class="text-false2"> 
     		 	 	We're sorry but we can't seem to find the pages you request . This might be because you have types the web address not find incorrectly.</p>
     		 	    <button type="button" class="btn btn-default btn-backhome  mt-30" ><a href="homepage.html">back to home</a></button>

     		 	 </div>

     		 	 <div class="col-md-6">
     		 	 	<img class=" img-false" src="Images/Bg-img/404-not-found.jpg" alt="">
     		 	 </div>
     		 </div>
     	</div>
     	
     </section>
@stop()