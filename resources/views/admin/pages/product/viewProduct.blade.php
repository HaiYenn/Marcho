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
         <div class="panel-heading">Danh sách sản phẩm </div>
         <div class="panel-body">
     
         </div>
       
         <!-- Table -->
         <table class="table">
           <thead>
             <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Title</th>
               <th>Status</th>
               <th>Price</th>
               <th>Category</th>
               <th>Created_at</th>
               <th>Action</th>
               
             </tr>
          
           </thead>
           <tbody>
          @foreach($products as $pro)
             <tr>
               <td>{{$loop->index+1}}</td>
               <td>{{$pro->pro_name}}</td>
               <td>{!!$pro->title!!}</td>
               <td>{{ ($pro->status == 1 ?"Còn" : "Hết") }}</td>
               <td>{{$pro->price}}</td>
               <td>{{$pro->category->cat_name}}</td>
               <td>{{$pro->created_at}}</td>
               <td style="display: flex" >
                <form action="{{route('product.destroy',$pro->pro_id)}} " method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Ban co muon xoa ?')">Xóa</button>
                </form>
                    <a href="{{route('product.edit',$pro->pro_id)}}" title="" class="btn btn-primary" style="margin-left: 20px;">Sửa</a>
                    <a href="{{route('productDetail.show',$pro->pro_id)}}" title="" class="btn btn-primary" style="margin-left: 20px;">Chi tiết</a>
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
