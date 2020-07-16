@extends('web/masterview')
@section('style')
	<link rel="stylesheet" href="css/shop-with-left.css">
	<link rel="stylesheet" href="css/reponsive.css">
@endsection
@section('main')
<section>


	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="search-left">
					<div class="boder">		
						<h4 style="margin-bottom: 15px;" class="search">SEARCH</h4>

						<div class="input-group">
							<input type="text" class="form-control" name="validate-text" id="validate-text" placeholder="Search your keyword..." required>
							<span style="cursor: pointer;" class="input-group-addon danger"><span class="glyphicon glyphicon-search"></span></span>
						</div>
					</div>

				</div>
				<div class="filter-price">
					<h4 style="margin-bottom: 25px" class="filter1">
						PRICE FILTER
					</h4>
					<div class="input-filter-price">
						<input type="text" placeholder="min">
						<input type="text" placeholder="max">

					</div>
					<div>
						<div class="show-price">
							Price: $0 - $999
						</div>
						<button class="btn-success">
							Filter
						</button>
					</div>
				</div>
				<div class="color-filter">
					<h4 style="margin-bottom: 25px;" class="filter2">
						COLOR FILTER
					</h4>
					<div class="list-color">
							<ul>
								@foreach($color as $c)
								<li>
									<a href="">{{$c->color_name}}</a>
									<span style="width: 15px;height: 15px;float: right;background-color:{{$c->color_picker}}" ></span>
								</li>
								@endforeach
							</ul>
						</div>
				</div>

				<div class="Size-Filter">
					<h4 class="filter3">
						SIZE FILTER
					</h4>
					<div class="sidebar-body">
							<ul class="radio-container search-list">
								@foreach($size as $s)
								<li>
									<div class="custom-control custom-radio">
										<input type="radio" name="1" class="custom-control-input" id="customCheck111">
										<label class="custom-control-label" for="customCheck111">{{$s->size_name}}</label>
									</div>
								</li>
								@endforeach
							</ul>
						</div>

				</div>
				<div class="catgory">
					<h4 style="margin-bottom: 35px;" class="filter4">
						CATEGORY
					</h4>
					<div class="doc-cate">
							<ul class="filter-cat">
								@foreach($cat as $val)
								<li>
									<a class="bd" href="">{{$val->cat_name}}</a>
									
								</li>
								@endforeach
							</ul>
						</div>
				</div>

				<div class="blog-sidebar">
					<h4 style="margin-bottom: 35px;" class="title">Popular Tags</h4>
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
			<div class="col-md-8">
				<div class="view-chart">
					<span>Views</span>
					<span><i class="fas fa-th"></i></span>
					<span><i class="fas fa-th-list"></i></span>
					<select class="sl-view" >
						<option value="">Show 9</option>
					</select>
					<select class="sl-view" >
						<option value="">Sort By Default</option>
					</select>
				</div>
			</div>
			<div class="col-md-8 top-35">

				<div class="row no-gutters">
				@foreach($products as $pro)
					<div class="col-md-6 top-35">
						<a href=""><img src="{{ asset('public/upload') }}/{{$pro->images}}"class="card-img" alt="..."></a>
						<div class="card-body">
							<div style="margin: 0px;" class="vote">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<span class="disable"><i class="fa fa-star "></i></span>
							</div>
							<h4 class="card-title">{{$pro->pro_name}}</h4>
							<span class="new-pri">{{$pro->price}}</span>
						</div>

					</div>
                @endforeach
					
				</div>		

				<nav aria-label="Page navigation example" class="nav-page">
{{ $products->links() }} 
  <!-- <ul class="pagination justify-content-center">
   <li class="page-item disabled">
    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
</li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">...</a></li>
<li class="page-item"><a class="page-link" href="#">10</a></li>
<li class="page-item">
    <a class="page-link" href="#">Next</a>
</li>
</ul> -->
</nav>

			</div>
		</div>
	</section>
	@stop()