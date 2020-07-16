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
               <th>Name</th>
               <th>Country</th>
               <th>Address</th>
               <th>Phone</th>
               <th>Email</th>
               <th>Note</th>
               <th>Created_at</th>
               <th></th>
             </tr>
          
           </thead>
           <tbody>
          @foreach($orders as $order)
             <tr>
               <td>{{$loop->index+1}}</td>
               <td>{{$order->customer->name}}</td>
               <td>{{$order->customer->country}}</td>
               <td>{{$order->customer->address}}</td>
               <td>{{$order->customer->phone}}</td>
               <td>{{$order->customer->email}}</td>
               <td>{{$order->customer->note}}</td>
               <td>{{$order->created_at}}</td>
               <td><a href="{{ route('orderDetail_index',['id'=>$order->id]) }}" title="" class="btn btn-primary">Chi tiết </a></td>

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
