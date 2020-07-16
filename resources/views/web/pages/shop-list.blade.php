@extends('web/masterview')
@section('style')
<link rel="stylesheet" href="css/shop-list-left.css">
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
							<button class="btn-danger">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</div>
					</div>

				</div>
				<div class="filter-price">
					<h4 style="margin-bottom: 25px" class="filter1">
						PRICE FILTER
					</h4>

					<label for="customRange2">Example range</label>
					<input type="range" class="custom-range" min="0" max="5" id="customRange2">
						<!-- <div class="input-filter-price">
							<input type="text" placeholder="min">
							<input type="text" placeholder="max">

						</div> -->
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
					@foreach($products as $pro)
					<div class="card mb-3">
						<div class="row no-gutters">
							<div class="col-md-4">
								<img src="{{ asset('public/upload') }}/{{$pro->images}}" class="card-img" alt="...">
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h4 class="card-title"><a href="{{ route('shop_detail',['id'=>$pro->pro_id]) }}" title="">{{$pro->pro_name}}</a></h4>
									<span class="new-pri">{{$pro->price}}</span>
									<span class="old-pri">$27.00</span>
									<div class="vote">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="disable"><i class="fa fa-star "></i></span>
									</div>
									<h5 class="card-text">{!!$pro->title!!}</h5>
									<a href="{{ route('add_cart',['id'=>$pro->pro_id,'quantity'=>1]) }}" class="btn btn-default">Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
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


	</section>
	@stop()