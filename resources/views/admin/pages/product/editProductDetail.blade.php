@extends('admin/masterview')
@section('main')
@section('style')
<link rel="stylesheet" type="text/css" href="css/addProduct.css">
@endsection()

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">


  </section>


  <section class="content">

    <div class="container">
     <div class="row">
      <div class="col-md-9">
       <div class="panel panel-info">
        <div class="panel-heading">
          <h3>Thêm Chi Tiết Sản Phẩm</h3>
        </div>
        <div class="panel-body">
          <form action="{{route('productDetail.update',['proDetail_id'=>$prodetail->proDetail_id])}}" method="POST" role="form" enctype="multipart/form-data">
          @method('PUT')
          @csrf

           <div class="form-group">
              <label for="">Sản Phẩm</label>
              <select name="pro_id" id="input" class="form-control" >
                @foreach($pro as $val)
                <option value="{{ $val->pro_id }}">{{ $val->pro_name }}</option>
                @endforeach
              </select>
            </div>

             <div class="form-group">
              <label for="">Size</label>
              <select name="size_id" id="input" class="form-control" >
                @foreach($size as $val)
                <option value="{{ $val->size_id }}" >{{ $val->size_name }}</option>
                @endforeach
              </select>
            </div>
            
             <div class="form-group">
              <label for="">Màu sắc</label>
              <select name="color_id" id="input" class="form-control" >
                @foreach($color as $val)
                <option value="{{ $val->color_id }}" style="background: {{ $val->color_name }}">{{ $val->color_name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="">Mô tả chi tiết</label>
              <textarea  id="editor1" name="description" value="{{$prodetail->description}}"></textarea>
            </div>

            <div class="form-group">
              <label for="">Số lượng</label>
              <input type="number" class="form-control" id="" placeholder="Tên sản phẩm...." name="quantity" value="{{$prodetail->quantity}}"> 
            </div>

            <div class="form-group">
              <label for="">Giảm giá</label>
              <input type="textarea" class="form-control" id="" placeholder="Tên sản phẩm...." name="discount" value="{{$prodetail->discount}}">
            </div>

            <div class="form-group">
              <label for="">List Ảnh</label>
              <input type="file" name="litsimage[]" multiple="" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật</button>
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
