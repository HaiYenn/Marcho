@extends('admin/masterview')
@section('style')
<link rel="stylesheet" type="text/css" href="css/addProduct.css">
@endsection()
@section('main')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">


  </section>


  <section class="content">

    <div class="container">
     <div class="row">
      <div class="col-md-12">
       <div class="panel panel-info">
        <div class="panel-heading">
          <h3>Thêm Sản Phẩm</h3>
        </div>
        <div class="panel-body">
          <form action="{{route('product.update',$pro->pro_id)}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group   @error('pro_name') has-error @enderror ">
              <label for="">Tên sản phẩm</label>
              <input type="text" class="form-control" value="{{ $pro->pro_name }}" id="" placeholder="Tên sản phẩm...." name="pro_name">
               @error('pro_name')
                  <div class="help-block">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group   @error('title') has-error @enderror">
              <label for="">Mô tả</label>
              <textarea name="title" id="editor1">{{ $pro->title }}</textarea>
                @error('title')
                  <div class="help-block">{{ $message }}</div>
                @enderror
            </div>
             <div class="form-group  @error('price') has-error @enderror ">
              <label for="">Giá</label>
              <input type="textarea" class="form-control" id="" placeholder="Tên sản phẩm...." name="price" value="{{$pro->price}}">
              @error('price')
                  <div class="help-block">{{ $message }}</div>
              @enderror
            </div>
  
            <div class="form-group ">
              <label for="">Trạng thái</label>
              <div class="radio">
                <label>
                  <input type="radio" class="sbtc" name="status" id="input" value="1" checked="checked">
                  Hiện
                </label>
                <label>
                  <input type="radio" name="status" id="input" value="0" >
                  Ẩn
                </label>
              </div>
            </div>
            <div class="form-group">
          <label for="">Image</label>
          <input type="file" class="form-control" name="upload" placeholder="Input field">
          @error('upload')
            <small class="error help-block">{{$message}}</small>
          @enderror
        </div>
            
            <div class="form-group">
              <label for="">Danh mục</label>
              <select name="categorys" id="input" class="form-control" required="required">
                @foreach($cat as $val)
                <option {{ ($pro->cat_id==$val->id?"selected":"")}} value="{{ $val->id }}">{{ $val->cat_name }}</option>
                @endforeach
              </select>
            </div>
            
           

            <button type="" type="submit" class="btn btn-primary">Thêm Mới</button>
          </form>
        </div>
      </div>
    </div>

    

</div>
  </div>

</section>
<!-- /.content -->
</div>

@stop()
