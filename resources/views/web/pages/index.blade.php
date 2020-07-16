@extends('web/masterview')
@section('style')
<link rel="stylesheet" href="css/style.css">
@endsection
@section('main')
<div class="container">
	<div class="row support">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<img src="img/icon/icon-car.png" alt="">
			<p class="title">Free Shipping & Return</p>
			<hr>
			<p>Lorem ipsum door sit amet, For the consectetur adipiscing</p>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<img src="img/icon/icon-oclock_03.png" alt="">
			<p class="title">30 Days Return</p>
			<hr>
			<p>Lorem ipsum door sit amet, For the consectetur adipiscing</p>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<img src="img/icon/icon.support_03.png" alt="">
			<p class="title">24/7 Strong Support</p>
			<hr>
			<p>Lorem ipsum door sit amet, For the consectetur adipiscing</p>
		</div>
	</div>
	<hr>
	<div class="row trending_items">
		<div class="col-md-12 col-sm-12 col-xs-12 trending_img">
			<div class="col-md-8 col-sm-8 col-xs-12">
				<a href=""><img src="img/homepage/01.png" alt=""></a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<a href=""><img src="img/homepage/02.png" alt=""></a>
			</div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12  trending_img">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<a href=""><img src="img/homepage/03.png" alt=""></a>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-12">
				<img src="img/homepage/04.png" alt="">
			</div>
		</div>
	</div>

	<div class="products">
		<h3>OUR PRODUCTS</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, expedita!</p>
		<div class="col-md-12 col-sm-12 col-xs-12 menu-sale">
			<a href="shop-page.html">ALL</a>
			<a class="active" href="">POPULAR</a>
			<a href="shop-page-trendding.html">TRENDING</a>
			<a href="shop-page-bestsell.html">BEST SELL</a>
		</div>
		<div class="row product_items">
			@foreach($products as $pro)
			<div class="col-md-3 col-sm-3 col-xs-6 items">
				<a href="" class="thumbnail-pros">
					<div class="product_img"><img src="{{ asset('public/upload') }}/{{$pro->images}}" alt=""></div>
				<div class="product_star">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<div class="product_name" >{{$pro->pro_name}}</div>
				<div class="product_price">{{$pro->price}} <span class="product_price_sale">$10.00</span></div>
				</a>
			</div>
			@endforeach
			
			
		</div>
	</div>
</div>

<div class="container-fluid1 blogger">
	<div class="container">
		<div class="blog-new">
			<h3>
				BLOG & NEWS 
			</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, totam.
			</p>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4 items">
				<a href="" class="thumbnail-pros">
					<div class="product_img"><img src="img/homepage/blog-new01.png" alt=""></div>
					<div class="n-m-y">
						<span>January 19,2020 by Admin</span>
					</div>
					<div class="product_name1">Lorem ipsum dolor sit amet.</div>
				</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 items">
				<a href="" class="thumbnail-pros">	
					<div class="product_img"><img src="img/homepage/blog-new02.png" alt=""></div>
					<div class="n-m-y">
						<span>January 19,2020 by Admin</span>
					</div>
					<div class="product_name1">Lorem ipsum dolor sit amet.</div>
				</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 items">
				<a href="" class="thumbnail-pros">
					<div class="product_img"><img src="img/homepage/blog-new03.png" alt=""></div>
					<div class="n-m-y">
						<span>January 19,2020 by Admin</span>
					</div>
					<div class="product_name1">Lorem ipsum dolor sit amet.</div>
				</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row pd-bottom">
		<div class="col-md-8 col-sm-8 col-xs-12">
			<div class="client-says">
				<h1>
					WHAT OUR CLIENT SAYS
				</h1>
				<p class="content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iure quibusdam similique vitae, necessitatibus officiis, quae repudiandae, porro voluptatem deserunt inventore praesentium minus voluptate quas quaerat tenetur itaque! Atque officiis doloribus, aut soluta est autem corporis velit similique deleniti id voluptatibus molestias praesentium harum necessitatibus veniam quos, aperiam tempore odio!
				</p>
				<h4>
					Endira Mahi
				</h4>
				<p class="content1">
					Graphics Designer
				</p>
				<i class="fas fa-long-arrow-alt-left"></i>
				<i class="fas fa-long-arrow-alt-right"></i>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="thumnail1">
				<img src="img/16.png" alt="">
			</div>
		</div>
	</div>

</div>
<div class="container-fluid">
	<div class="banner">
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12 reset-padding">
				<div class="banner_img">


					<img src="img/homepage/new-colection.png" alt="">
				</div>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12 banner_content">
				<span>
					NEW COLECTION 2020
				</span>
				<h1>
					SALE 60% OFF 
				</h1>
				<p class="ab">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci, magni? Voluptas rerum architecto aut molestiae ad sunt atque, fugiat maxime assumenda, maiores corporis facilis?
				</p>
				<button class="shop-now-btn">
					SHOP NOW
				</button>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row brand">
		<div class="col-md-2 col-sm-2 col-xs-2">
			<img class="ccck" src="img/icon/Shape 5.png" alt="">
		</div>
		<div class="col-md-2 col-sm-2 col-xs-2">
			<img class="ccck" src="img/icon/Shape 6.png" alt="">
		</div>
		<div class="col-md-2 col-sm-2 col-xs-2">
			<img class="ccck" src="img/icon/Shape 7.png" alt="">
		</div>
		<div class="col-md-2 col-sm-2 col-xs-2">
			<img class="ccck" src="img/icon/Shape 8.png" alt="">
		</div>
		<div class="col-md-2 col-sm-2 col-xs-2">
			<img class="ccck" src="img/icon/Shape 9.png" alt="">
		</div>
		<div class="col-md-2 col-sm-2 col-xs-2">
			<img class="ccck" src="img/icon/Shape 10.png" alt="">
		</div>
	</div>
</div>
<div class="owl-carousel owl-theme" id="owl-banner-footer">
	<div class="item"><img src="img/owl/owl1.png" alt=""></div>
	<div class="item"><img src="img/owl/owl2.png" alt=""></div>
	<div class="item"><img src="img/owl/owl3.png" alt=""></div>
	<div class="item"><img src="img/owl/owl4.png" alt=""></div>
	<div class="item"><img src="img/owl/owl2.png" alt=""></div>
	<div class="item"><img src="img/owl/owl3.png" alt=""></div>
	<div class="item"><img src="img/owl/owl1.png" alt=""></div>
	<div class="item"><img src="img/owl/owl4.png" alt=""></div>
	<div class="item"><img src="img/owl/owl3.png" alt=""></div>
	<div class="item"><img src="img/owl/owl1.png" alt=""></div>
	<div class="item"><img src="img/owl/owl4.png" alt=""></div>
	<div class="item"><img src="img/owl/owl2.png" alt=""></div>
</div>

@stop()