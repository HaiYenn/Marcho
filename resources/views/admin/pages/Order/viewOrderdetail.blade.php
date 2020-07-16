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
         <div class="panel-heading">Danh sách đơn hàng </div>
         <div class="panel-body">
     
         </div>
       
         <!-- Table -->
         <table class="table">
           <thead>
             <tr>
               <th>Mã</th>
               <th>Tên sản phẩm</th>
               <th>Số lượng</th>
               <th>Tiền</th>
               <th></th>
             </tr>
          
           </thead>
           <tbody>
            @foreach($orderDetail as $val)
              
               <tr>
                 <td>{{ $loop->index+1 }}</td>
                 <td>{{ $val->products->product->pro_name}}</td>
                 <td>{{ $val->quantity}}</td>
                 <td>{{ $val->amount}}</td>
                 
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
