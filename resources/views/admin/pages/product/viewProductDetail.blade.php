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
       <div class="panel panel-default">
         <!-- Default panel contents -->
         <div class="panel-heading">Danh sách chi tiết sản phẩm</div>
         <div class="panel-body">
     
         </div>
       
         <!-- Table -->
         <table class="table">
           <thead>
             <tr>
               <th>STT</th>
               <th>Name</th>
               <th>Size</th>
               <th>Color</th>
               <th>Description</th>
               <th>Discount</th>
               <th>Quantity</th>
               <th>Created_at</th>
               <th>Action</th>
               
             </tr>
            
           </thead>
           <tbody>
          @foreach($prodetail as $val)
             <tr>
               <td>{{$loop->index+1}}</td>
               <td>{{$val->product->pro_name}}</td>
               <td>{{$val->size->size_name}}</td>
               <td style="background: {{ $val->color->color_name }}"></td>
               <td>{!!$val->description!!}</td>
               <td>{{$val->discount}}</td>
               <td>{{$val->quantity}}</td>
               <td>{{$val->created_at}}</td>
               <td style="display: flex" >
                <form action="{{route('productDetail.destroy',$val->proDetail_id)}} " method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Ban co muon xoa ?')">Xóa</button>
                </form>
                    <a href="{{route('productDetail.edit',$val->proDetail_id)}}" title="" class="btn btn-primary" style="margin-left: 20px;">Sửa</a>
               </td >
             </tr>

          @endforeach
             
           </tbody>
         </table>
       
       </div>

    </div>

</div>
  </div>

</section>
<!-- /.content -->
</div>

@stop()
