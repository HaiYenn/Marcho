@extends('web/masterview')
@section('style')
	<link rel="stylesheet" type="text/css" href="css/blog.css">
	<link rel="stylesheet" href="css/blog_details.css">
@endsection
@section('main')

<div class="container">
			<div class="row">
				<div class="col-md-8" style="overflow: hidden">
					<div class="thumbnail">
						<img src="Images/Bg-img/man-sitting-fashion.jpg"  class="img-details-first">

						<div class="blog_details_form">
							<ul class="bdf_box">
								<li ><span><i class="far fa-calendar-alt icon_details"></i></span> 16 Feb, 2020</li>
								<li ><a href="#"></a><span><i class="far fa-comment-alt icon_details" ></i></span> 3 comments</li>
								<li ><a href="#"></a><span><i class="far fa-user icon_details" ></i></span> By Admin</li>
							</ul>
							<h4>In Particular The Global World Of Lorem Ipsum Asap Tempor</h4>
							<p class="bl_details_cc"class="span-img">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla iste sapiente sequi totam ab saepe odit dolores ex inventore quis unde sed rerum dignissimos quo quas, ullam neque, amet sunt. Lorem ipsum dolor sit amet, consecteaur adipisicing elit. Sed, eum veritatis, laborum libero praesentium temporibus esse qui autem illo consectetur facere quasi voluptates nesciunt, dicta iure? Nostrum quo in consequuntur!</p>


							<div class="blog_details_border">
								<b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eaque sapiente corporis eveniet. Deleniti suscipit reiciendis, quas eaque ut cumque provident. Praesentium doloribus quo dicta.</b>
							</div>
							<div class="bl_details_cc" class="span-img">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla iste sapiente sequi totam ab saepe odit dolores ex inventore quis unde sed rerum dignissimos quo quas, ullam neque, amet sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, eum veritatis</div>

							<div class="row">
								<div class="col-md-6">
									<img src="Images/Bg-img/man-sitting-fashion.jpg" alt="" class="blog-fas">
								</div>
								<div class="col-md-6 ">
									<p class="alignment_details" class="span-img">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In porro, eaque iusto recusandae quasi dignissimos repellat exercitationem placeat blanditiis dolores eum a, perferendis earum vitae ut dolorum molestias ex maxime!
									Quae in molestias illo, veniam sit perferendis voluptatibus autem nulla dicta cum rem quos, ducimus sunt excepturi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit incidunt quae vel molestiae officiis et error hic libero sunt porro. Error dicta impedit iusto sed tenetur pariatur perferendis mollitia enim.</p>
								</div>
							</div>
						</div>					
					</div>
					<div>
						<p><b>TAGS:</b>     Fashions,Style</p>
						<div class="share-icon">
							<b>SHARE:</b> 
							<i class="fab fa-twitter" class="color-icon"></i>
							<i class="fab fa-linkedin-in"></i>
							<i class="fab fa-google"></i>
							<i class="fab fa-pinterest-p icon_contact"></i>
						</div>
					</div>
					<div class="pb-100">
						<div class="img-card-first">
							<img src="Images/Bg-img/john.jpg" alt="" class="img-card">
						</div>
						<div>
							<h3>JHON DOE</h3><br/>
							<p style=""  class="span-img">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat soluta minus dolorum unde illo ex maiores voluptas ipsum reiciendis tempora, eaque, rerum illum laudantium quasi odit vel excepturi distinctio quaerat.</p>
						</div>
					</div>
					<div>
						<h4 class="pb-30"><b>02 COMMENTS</b></h4>
						<div class="img-card-first">
							<img src="Images/Bg-img/image1.jpg" alt="" class="ava-img">
						</div>
						<div>
							<h5><b>Michle Jhon</b> | 2 days ago</h5>
							<p style=""  class="span-img">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat laudantium eligendi dignissimos, repellat nemo. Ipsa tempora voluptatum dicta hic</p>
							<p class="ml-100"><i class="fas fa-reply"></i> Reply</p>
						</div>
					</div>
					<div>
						<div class="img-card-first">
							<img src="Images/Bg-img/image1.jpg" alt="" class="ava-img">
						</div>
						<div>
							<h5><b>Michle Jhon</b> | 2 days ago</h5>
							<p  class="span-img">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat laudantium eligendi dignissimos, repellat nemo. Ipsa tempora voluptatum dicta hic</p>
							<p class="ml-100"><i class="fas fa-reply"></i> Reply</p>
						</div>
					</div>
					<div class="pt-30">
						<form action="" method="POST" role="form">				
							<div class="form-group">
								<h4><b>LEAVE A REPLY</b></h4>
								<div class="row">
									<div class="col-md-6">
										<input type="text" class="form-control input_details" id="" placeholder="Your name">
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control input_details" id="" placeholder="Your mail" >
									</div>
									<div class="col-md-12">
										<textarea name="" rows="6" placeholder="Your comment" class="textarea_details" ></textarea>
									</div>
								</div>
								
							</div>
							
							
							
							<button type="submit" class="btn btn-primary btn-class"  >POST COMMENT</button>
						</form>
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