@extends('web/masterview')
@section('style')
<link rel="stylesheet" href="css/shop-page.css">
<link rel="stylesheet" href="css/reponsive.css">
@endsection
@section('main')
<div class="container">
    <div class="row pd-header-30">
     <div class="col-md-12">
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

@foreach($products as $pro)
<div class="col-md-4 col-sm-6" style="padding-top: 40px;">
    <div class="product-grid">
        <div class="product-image">
            <a href="#">
                <img class="pic-1" src="{{ asset('public/upload') }}/{{$pro->images}}">

            </a>
            <ul class="social">
                <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                <li><a href="{{ route('wishlist',['id'=>$pro->pro_id]) }}" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                <li><a href="{{ route('add_cart',['id'=>$pro->pro_id,'quantity'=>1]) }}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
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
            <h3 class="title"><a href="#">{{$pro->pro_name}}</a></h3>
            <div class="price">{{$pro->price}}</div>
            <!-- <a class="add-to-cart" href="">+ Add To Cart</a> -->
        </div>
    </div>
</div>
@endforeach

<nav aria-label="Page navigation example" class="nav-page">
{{ $products->links() }} 

</nav>
</div>
</div>


@stop()