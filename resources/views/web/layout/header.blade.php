<header>
		<div class="menu">
			<div class="container">
				<div class="box-nav">
					<div class="logo">
						<img src="Images/Bg-img/logo1.png" alt="">
					</div>
					<div class="menu-nav">
						<nav class="text-center">
							<ul class="p-0">
								<li><a href="{{ route('home') }}">Home</a></li>
								<li>
									<div class="dropdown">
										<a class="item-btn dropdown-toggle" type="button" data-toggle="dropdown">Shop
											<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="{{ route('shop_list') }}">Shop List</a></li>
												<li><a href="{{ route('shop_with') }}">Shop With</a></li>
												<li><a href="{{ route('shop_page') }}">Shop Page</a></li>
												
											</ul>
										</div>
									</li>
									<li><a href="{{ route('cart_page') }}">Page</a></li>
									<li>
										<div class="dropdown">
											<a class="item-btn dropdown-toggle" type="button" data-toggle="dropdown">Blog
												<span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a href="{{ route('blog_detail') }}">Blog detail</a></li>
													<li><a href="{{ route('blog_standard') }}">Blog standard</a></li>
													<li><a href="{{ route('blog_list') }}">Blog list</a></li>
													<li><a href="{{ route('blog_grid') }}">Blog grid</a></li>
												</ul>
											</div>
										</li>
										<li><a href="{{ route('contact') }}">Contact</a></li>
									</ul>

								</nav>
							</div>
							<div class="icon">
								<div class="text-right">
									@if(Auth::check())
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 0px;">
												{{Auth::user()->name}}
												<b class="caret"></b>
											</a>
												<ul class="dropdown-menu">
													<li><a href="{{route('user.logout')}}">Thoát tài khoản</a></li>
												</ul>
											</li>
										</ul>
									@else
									<a href="{{route('login')}}" class="menu-icon"><img src="Images/icon/user.png" alt=""></a>
									@endif
									<a href="# " class="menu-icon"><img src="Images/icon/search.png" alt=""></a>
									<a href="#" class="menu-icon"><img src="Images/icon/heart.png" alt=""></a>
									<a href="{{route('cart_page')}}" class="menu-icon"><img src="Images/icon/cart.png" alt=""></a>
									<i class="hidden-lg visible-xs-block visible-sm-block glyphicon glyphicon-align-justify icon-toggle cc"></i>	
								</div>
							</div>


						</div>
					</div>
				</div>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<!-- <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol> -->

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="Images/banner/banner1.jpg" alt="Los Angeles">
						</div>

						<div class="item">
							<img src="Images/banner/banner2.jpg" alt="Chicago">
						</div>

						<div class="item">
							<img src="Images/banner/banner3.jpg" alt="New York">
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
	</header>