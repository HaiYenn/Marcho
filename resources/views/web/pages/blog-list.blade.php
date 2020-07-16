@extends('web/masterview')
@section('style')
	<link rel="stylesheet" type="text/css" href="css/blog.css">
	<link rel="stylesheet" href="css/blog_details.css">
	<link rel="stylesheet" href="css/blog_list.css">
@endsection
@section('main')
<div class="container">
				<div class="row">
					<div class="col-md-8" style="overflow: hidden">
						<div class="thumbnail form_bloglish">
							<img src="Images/Bg-img/blog-list-1.jpg" alt="" class="blog-list-img">
							<div class="lish">
								<h4 class="magin_lish"><b>Be prepared to sweet a lot, but at least in the Southern regions there's a good chance you'll get to enjoy!</b></h4>
								<div class="span_blog ">
									<p ><span class="span-img"><img src="Images/icon/icon.png" alt="" class="img_icon"></span>  By Admin</p>
								</div>
								<div >
									<p><span class="span-img"><img src="Images/icon/icon_oclock.png" alt="" class="img_icon"></span>  10 January, 2020</p>
								</div >
								<div class="padding_lish">
									<p class="span-img">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel illo nostrum odit dolores adipisci accusamus, necessitatibus. Animi, expedita accusantium. Magni facilis quod perspiciatis assumenda soluta quam dolor voluptatum reiciendis quidem!</p>
								</div>
							</div>
						</div>
						<div class="thumbnail form_bloglish">
							<iframe width="747" height="450" src="https://www.youtube.com/embed/tgbNymZ7vqY">
							</iframe>

							<div class="lish">
								<h4 class="magin_lish"><b>Be prepared to sweet a lot, but at least in the Southern regions there's a good chance you'll get to enjoy!</b></h4>
								<div class="span_blog ">
									<p><span class="span-img"><img src="Images/icon/icon.png" alt="" class="img_icon"></span>  By Admin</p>
								</div>
								<div >
									<p><span class="span-img"><img src="Images/icon/icon_oclock.png" alt="" class="img_icon"></span>  10 January, 2020</p>
								</div>
								<div class="padding_lish">
									<p class="span-img">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel illo nostrum odit dolores adipisci accusamus, necessitatibus. Animi, expedita accusantium. Magni facilis quod perspiciatis assumenda soluta quam dolor voluptatum reiciendis quidem!</p>
								</div>
							</div>
						</div>
						<div class="thumbnail form_bloglish">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
										<img src="Images/Bg-img/blog-list.jpg" >
									<!-- <div class="carousel-caption">
										<h3>Los Angeles</h3>
										<p>LA is always so much fun!</p>
									</div> -->
								</div>

								<div class="item">
									<img src="Images/Bg-img/blog-list-2.jpg" >
								<!-- <div class="carousel-caption">
									<h3>Chicago</h3>
									<p>Thank you, Chicago!</p>
								</div> -->
							</div>

							
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<div class="lish">
						<h4 class="magin_lish"><b>Be prepared to sweet a lot, but at least in the Southern regions there's a good chance you'll get to enjoy!</b></h4>
						<div class="span_blog ">
							<p><span class="span-img"><img src="Images/icon/icon.png" alt="" class="img_icon"></span>  By Admin</p>
						</div>
						<div >
							<p><span class="span-img"><img src="Images/icon/icon_oclock.png" alt="" class="img_icon"></span>  10 January, 2020</p>
						</div>
						<div class="padding_lish">
							<p class="span-img">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel illo nostrum odit dolores adipisci accusamus, necessitatibus. Animi, expedita accusantium. Magni facilis quod perspiciatis assumenda soluta quam dolor voluptatum reiciendis quidem!</p>
						</div>
					</div>

				</div>
				<div class="form_lish">
					<div class="lish_blog">
						<h4 class="magin_lish"><b>Be prepared to sweet a lot, but at least in the Southern regions there's a good chance you'll get to enjoy!</b></h4>
						<div class="span_blog ">
							<p><span class="span-img"><img src="Images/icon/icon.png" alt="" class="img_icon"></span>  By Admin</p>
						</div>
						<div >
							<p><span class="span-img"><img src="Images/icon/icon_oclock.png" alt="" class="img_icon"></span>  10 January, 2020</p>
						</div>
						<div class="padding_lish">
							<p class="span-img">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel illo nostrum odit dolores adipisci accusamus, necessitatibus. Animi, expedita accusantium. Magni facilis quod perspiciatis assumenda soluta quam dolor voluptatum reiciendis quidem!</p>
						</div>
					</div>
				</div>

			</div>
			<div class="col-md-4 ">
				<div class="thumbnail">
					<div class="search-left">
						<div class="boder">
							<h4 class="search">SEARCH</h4>

							<div class="input-group	">
								<input type="text" class="form-control" name="validate-text" id="validate-text" placeholder="Search your keyword..." required>
								<span class="input-group-addon danger"><span class="glyphicon glyphicon-search">								
								</span></span>
							</div>
						</div>
					</div>
				</div>
				<div class="thumbnail form_bg_standard">
					<img src="Images/Bg-img/thomas.jpg" alt="" class="img_blog_standard" >
					<h4>Tom D Manalay</h4>
					<p class="ceo-p">CEO & Founder</p>
					<p class="lorem-p">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum ipsam magnam totam aliquam accusantium culpa, eius deleniti aspernatur sapiente vel? Aliquam saepe est odit, impedit dolore excepturi id pariatur recusandae.</p>
					<div class="mb-35">
						<i class="fab fa-facebook-f icon_contact"></i>
						<i class="fab fa-twitter icon_contact"></i>
						<i class="fab fa-instagram icon_blog_standard icon_contact"></i>
						<i class="fab fa-pinterest-p icon_contact"></i>
					</div>
				</div>
				<div class="thumbnail">
					<div class="search-left">
						<div class="boder">
							<h4 class="search">LATEST POST</h4>
							<div class="latest_blog_stand">
								<div class="row">
									<div class="col-md-4">
										<img src="Images/Bg-img/image1.jpg" alt="" class="img_post_stand">
									</div>
									<div class="col-md-8">
										<p class="latestport_h4">Lorem ipsum dolor sit amet, consectetur </p>
										<p class="latestport_p"> <span><i class="far fa-calendar-alt" ></i></span> 16 Feb, 2020</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<img src="Images/Bg-img/image2.jpg" alt="" class="img_post_stand">
									</div>
									<div class="col-md-8">
										<p class="latestport_h4">Lorem ipsum dolor sit amet, consectetur </p>
										<p class="latestport_p"> <span><i class="far fa-calendar-alt" ></i></span> 16 Feb, 2020</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="catgory">
						<h4 class="filter4">
							CATEGORY
						</h4>
						<div class="doc-cate">
							<ul class="filter-cat">
								<li>
									<a class="bd" href="">Women</a>
									<span>33</span>
								</li>
								<li>
									<a class="bd" href="">Man</a>
									<span>33</span>
								</li>
								<li>
									<a class="bd" href="">Sale Products</a>
									<span>33</span>
								</li>
								<li>
									<a class="bd" href="">Fashion</a>
									<span>33</span>
								</li>
								<li>
									<a class="bd" href="">Hot Dresses</a>
									<span>33</span>
								</li>
								<li>
									<a class="bd" href="">Accessories</a>
									<span>33</span>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="thumbnail">
					<div class="blog-sidebar">
						<h4 class="title">Popular Tags</h4>
						<ul class="blog-tags">
							<li><a href="#">Sweetshirt</a></li>
							<li><a href="#">Man Accessories</a></li>
							<li><a href="#">Fashion</a></li>
							<li><a href="#">Polo</a></li>
							<li><a href="#">T-Shirt</a></li>
							<li><a href="#">Jewellery</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	@stop()