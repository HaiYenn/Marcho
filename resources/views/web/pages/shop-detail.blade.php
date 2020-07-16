@extends('web/masterview')
@section('style')
<link rel="stylesheet" href="css/blog-detail.css">
<link rel="stylesheet" href="css/reponsive.css">
<link rel="stylesheet" href="src/css/star-rating-svg.css">
@endsection
@section('main')
<section>
	<div class="container">
		<div class="row pd-top-100">
			<div class="col-md-2">
				<ul class="img-chose">
					@foreach( json_decode($product->listimage->image_url) as $val)
					<li><img class="anh1" src="{{ asset('public/upload') }}/{{ $val }}" alt=""></li>
					@endforeach
				</ul>
			</div>
			<div class="col-md-6">
				<link rel="stylesheet" href="css/pygments.css" />
				<link rel="stylesheet" href="css/easyzoom.css" />
				<script>
					var _gaq=[['_setAccount','UA-2508361-9'],['_trackPageview']];
					(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
						g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
						s.parentNode.insertBefore(g,s)}(document,'script'));
					</script>
					<section id="example">
						<div class="easyzoom easyzoom--overlay">
							<a href="{{ asset('public/upload') }}/{{$product->images}}">
								<img src="{{ asset('public/upload') }}/{{$product->images}}" id="img-choosed" alt="" style="width: 100%; height:605px;object-fit: cover;"/>
							</a>
						</div>
					</section>
					<style>
						.easyzoom-flyout img{
							width: 1000px !important;
						}
					</style>
					<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
					<script src="dist/easyzoom.js"></script>

					<script>
		// Instantiate EasyZoom instances
		var $easyzoom = $('.easyzoom').easyZoom();

		// Setup thumbnails example
		var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

		$('.thumbnails').on('click', 'a', function(e) {
			var $this = $(this);

			e.preventDefault();

			// Use EasyZoom's `swap` method
			api1.swap($this.data('standard'), $this.attr('href'));
		});

		// Setup toggles example
		var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

		$('.toggle').on('click', function() {
			var $this = $(this);

			if ($this.data("active") === true) {
				$this.text("Switch on").data("active", false);
				api2.teardown();
			} else {
				$this.text("Switch off").data("active", true);
				api2._init();
			}
		});
	</script>
</div>
<div class="col-md-4">
	<h4 class="emboosed">
		{{$product->pro_name}}
	</h4>
	<span class="new-pri">${{$product->sale_price($product->pro_id)}}</span>
	<span class="old-pri">({{$product->price}})</span>
	<ul class="rating">
		<li><i class="fa fa-star"></i></li>
		<li><i class="fa fa-star"></i></li>
		<li><i class="fa fa-star"></i></li>
		<li><i class="fa fa-star"></i></li>
		<li class="disable"><i class="fa fa-star "></i></li>
	</ul>

	<div class="review">
		<h5 class="review-title">
			Review:
		</h5>
		<p class="lorem">{!! $product->title !!}</p>
	</div>
	<div class="color">
		<h5 class="color-title">
			Color:
		</h5>
		<button style="width: 18px;height: 18px;float: left;border:none;background-color:{{$product->product_detail->color->color_name}}" class="product-variation1" ></button>


	</div>
	<div class="size">
		<h5 class="size-title">
			Size:
		</h5>
		<button class="product-size">{{$product->product_detail->size->size_name}}</button>
		

	</div>

	<div class="pding-top">
		<div class="sku">
			<h5 class="h51">
				SKU
			</h5>
			<a href="" class="none"><span class="all">11FSE7739</span></a>
		</div>
		<div class="category">
			<h5 class="h51">
				Categorys
			</h5>
			<a href="" class="none"><span class="all">Woman</span></a>
		</div>
		<div class="Tags2">
			<h5 class="h51">
				Tags
			</h5>
			<a href="" class="none"><span class="all">Fashion | Woman | Sale</span></a>
		</div>
		<div class="share">
			<h5 class="h51">
				Share
			</h5>
			<span class="all">
				<a href=""><i class="fab fa-facebook-f"></i></a>
				<a href=""><i class="fab fa-twitter"></i></a>
				<a href=""><i class="fab fa-instagram"></i></a>
				<i class="fab fa-pinterest-p"></i>
			</span>
		</div>
	</div>
	<form style="margin-bottom: 30px;" id="target" action="{{ route('add_cart',['id'=>$product->pro_id]) }}" method="get">
		
		<button type="button" id="sub" class="sub">-</button>
		<input style="width: 15%;" type="number" id="quantity" name="quantity" value="1" min="1" data-max="{{ $product->product_detail->quantity }}"  />
		<button type="button" id="add" class="add">+</button>

		<!-- <a href="{{ route('add_cart',['id'=>$product->pro_id]) }}" class="btn btn-default bt">Add to Carts</a> -->
		<button type="submit" class="btn btn-default bt">Add to Carts</button>
	</form>
	<a id="wishlist" style="text-decoration: none;font-size: 20px;" data-url="{{ route('ajax-wishlist',['id'=>$product->pro_id]) }}"><i style="margin-right: 15px; font-size: 20px; " class="far fa-heart"></i>Đã thích ( <span id="msg">
		@if($wishlist!=null)
		{{$wishlist->count_wishlist($product->pro_id)}}
		@else
		0
		@endif</span> )</a>
</div> 
</div>
<div class="comment-title">


	<div class="colum-1">

		<a href="">Description</a>

	</div>
	<div class="colum-2">

		<a href="">Addtional information </a>

	</div>
	<div class="colum-3">

		<a href="">Reviews</a>

	</div>
</div>

<div class="card mb-3">
	<div class="row no-gutters">
		<div class="col-md-1">
			<img src="img/avatar.jpg" class="card-img w-100" alt="...">
		</div>
		<div class="col-md-11">
			<div class="card-body">
				<h5 class="card-title">
					<a href=""class="none"><b>Michle Jhon</b></a> <a href=""class="none1">| 2 days ago</a>
					<div class="vote1">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<span class="disable"><i class="fa fa-star "></i></span>
					</div>
				</h5>

				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, fugiat temporibus aliquid a dolor eos aperiam sit ea id labore. Dicta atque voluptate minima eius sed obcaecati eligendi magnam dolor?</p>
				<a href="" class="none">	<p><i class="fa fa-reply"></i>Reply</p></a>
			</div>

		</div>

		<div class="col-md-1">
			<img src="img/avatar.jpg" class="card-img w-100" alt="...">
		</div>
		<div class="col-md-11">
			<div class="card-body">
				<h5 class="card-title">
					<a href=""class="none"><b>Michle Jhon</b></a> <a href=""class="none1">| 2 days ago</a>
					<div class="vote1">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<span class="disable"><i class="fa fa-star "></i></span>
					</div>
				</h5>

				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, fugiat temporibus aliquid a dolor eos aperiam sit ea id labore. Dicta atque voluptate minima eius sed obcaecati eligendi magnam dolor?</p>
				<a href="" class="none">	<p><i class="fa fa-reply"></i>Reply</p></a>
			</div>
		</div>

		<div class="col-md-1">
			<img src="img/avatar.jpg" class="card-img w-100" alt="...">
		</div>
		<div class="col-md-11">
			<div class="card-body">
				<h5 class="card-title">
					<a href=""class="none"><b>Michle Jhon</b></a> <a href=""class="none1">| 2 days ago</a>
					<div class="vote1">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<span class="disable"><i class="fa fa-star "></i></span>
					</div>
				</h5>

				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, fugiat temporibus aliquid a dolor eos aperiam sit ea id labore. Dicta atque voluptate minima eius sed obcaecati eligendi magnam dolor?</p>
				<a href="" class="none">	<p><i class="fa fa-reply"></i>Reply</p></a>
			</div>
		</div>

	</div>

</div>

<div class="add-review">
	<h4>
		Add Your Review
	</h4>
</div>

<div class="review-star">
	<p class="your-rating">Your Rating</p>
	<!-- <div class="vote">
		<i class="fa fa-star"></i>
	</div>
	<div class="vote">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
	</div>
	<div class="vote">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
	</div>
	<div class="vote">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
	</div>
	<div class="vote5">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
	</div> -->
	<div class="my-rating jq-stars" id="jq-stars" data-pro="{{ $product->pro_id }}" data-url="{{route('rating')}}"></div>

</div>

<div class="form-reviews">
	<form action="{{route('commentpost',['id'=>$product->pro_id])}}" method="POST">
	@csrf
		<div class="col-md-6 col-sm-6 col-xs-12 form-input">
			<input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Yourname" >
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 form-input">
			<input type="email" name="email" class="form-control" id="inputPassword4" placeholder="E-mail address">
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 form-input">
			<textarea rows="10" cols="50" name="content" placeholder="Your text here"></textarea>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 button">
			<input class="btn btn-primary" type="submit" value="LEAVE REVIEW">
		</div>
	</form>
</div>


<hr>

<h1 class="big-title">
	RELATED PRODUCTS
</h1>
<div class="col-md-3 col-sm-6" style="padding-top: 40px; padding-right: 0px;">
	<div class="product-grid">
		<div class="product-image">
			<a href="#">
				<img class="pic-1" src="img/10.png">

			</a>
			<ul class="social">
				<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
				<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
				<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		</div>
		<ul class="rating">
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star disable"></li>
		</ul>
		<div class="product-content">
			<h3 class="title"><a href="#">Women's Blouse</a></h3>
			<div class="price">$16.00

			</div>
			<!-- <a class="add-to-cart" href="">+ Add To Cart</a> -->
		</div>
	</div>
</div>
<div class="col-md-3 col-sm-6" style="padding-top: 40px;padding-right: 0px;">
	<div class="product-grid">
		<div class="product-image">
			<a href="#">
				<img class="pic-1" src="img/10.png">

			</a>
			<ul class="social">
				<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
				<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
				<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		</div>
		<ul class="rating">
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star disable"></li>
		</ul>
		<div class="product-content">
			<h3 class="title"><a href="#">Women's Blouse</a></h3>
			<div class="price">$16.00

			</div>
			<!-- <a class="add-to-cart" href="">+ Add To Cart</a> -->
		</div>
	</div>
</div>
<div class="col-md-3 col-sm-6" style="padding-top: 40px; padding-right: 0px;">
	<div class="product-grid">
		<div class="product-image">
			<a href="#">
				<img class="pic-1" src="img/10.png">

			</a>
			<ul class="social">
				<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
				<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
				<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		</div>
		<ul class="rating">
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star disable"></li>
		</ul>
		<div class="product-content">
			<h3 class="title"><a href="#">Women's Blouse</a></h3>
			<div class="price">$16.00

			</div>
			<!-- <a class="add-to-cart" href="">+ Add To Cart</a> -->
		</div>
	</div>
</div>
<div class="col-md-3 col-sm-6" style="padding-top: 40px; padding-right: 0px;">
	<div class="product-grid">
		<div class="product-image">
			<a href="#">
				<img class="pic-1" src="img/10.png">

			</a>
			<ul class="social">
				<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
				<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
				<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		</div>
		<ul class="rating">
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star disable"></li>
		</ul>
		<div class="product-content">
			<h3 class="title"><a href="#">Women's Blouse</a></h3>
			<div class="price">$16.00

			</div>
			<!-- <a class="add-to-cart" href="">+ Add To Cart</a> -->
		</div>
	</div>
</div>

</div>


</section>
@endsection()
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
	$("#target").submit(function( event ) {
		var max = $("#quantity").attr("data-max");
		var quantity = $("#quantity").val();
		if (parseInt(quantity)  > parseInt(max)) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Còn 4 sản phẩm',
			});
			return false;
		}
	});

	$("#wishlist").click(function(event) {
		var url = $(this).attr("data-url");
		$.ajax({
           type:'GET',
           url:url,
           success:function(data) {
              $("#msg").html(data);
           }
        });
	});

	$("#jq-stars").click(function(event) {
		var url = $(this).attr("data-url");
		var pro_id = $(this).attr("data-pro");
		$.ajax({
           type:'GET',
           url:url,
           data : {
           	star : 1,
           	pro_id: pro_id,
           },
           success:function(data) {
              $("#msg").html(data);
           }
        });
	});
</script>
@stop()