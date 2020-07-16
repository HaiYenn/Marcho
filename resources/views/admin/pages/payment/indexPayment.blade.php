@extends('admin/masterview')
@section('main')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">


  </section>


  <section class="content">

    <div class="container">
     <div class="row">
      <div class="col-md-6">
       <div class="panel panel-info">
        <div class="panel-heading">
          <h3>Thêm Phương Thức Thanh Toán</h3>
        </div>
        <div class="panel-body">
          <form action="{{ route('payment.store')}}" method="POST" role="form" enctype="multipart/form-data">
           @csrf
           <div class="form-group">
           <label for="">Kiểu Thanh Toán</label>
           <input type="text" class="form-control" id="" placeholder="" name="type">
         </div>
        <div class="form-group">
          <label for="">Trạng thái</label>
          <div class="radio">
            <label>
              <input type="radio" class="sbtc" name="status" id="input" value="1" checked>
              Hiện
            </label>
            <label>
              <input type="radio" name="status" id="input" value="0" >
              Ẩn
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
      </form>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading"><h3>Phương Thức Thanh Toán</h3></div>
    <div class="panel-body">

    </div>

    <!-- Table -->
    <table class="table">
      <thead>
        <tr>
          
          <th>Kiểu TT</th>
          <th>Trạng Thái</th>
          <th>Ngày Tạo</th>
          <th></th>


        </tr>

      </thead>
      <tbody>
        @foreach($payments as $val)
        <tr>
         
         <td>{{$val->type}}</td>
         
         <td>{{ ($val->status == 1)? 'Hiện' : 'Ẩn'}}</td>
         <td style="display: flex">
          <form action="{{route('payment.destroy',['id'=>$val->id])}}" method="POST" accept-charset="utf-8" onsubmit="return confirm('Bạn có muốn xóa')">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn-danger btn" >Xóa</button>
          </form>
            <a class="btn btn-primary" data-id ="{{$val->id}}" id="edit_pay" data-toggle="modal" data-target="#exampleModal" style="margin-left: 11px;">Sửa</a>


        </td>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="body-modal">
         
      </div>
      
    </div>
  </div>
</div>
@endsection()
@section('script')
<script type="text/javascript">
   jQuery(document).ready(function(){
    jQuery('#edit_pay').click(function(e){
        var id = $("#edit_pay").attr("data-id");
       jQuery.ajax({
          url: "{{ route('ajax-payment') }}",
          method: 'get',
          data: {
             id:id 
          },
          success: function(result){
             $("#body-modal").html(result);
          }});
       });
    });
</script> 
@stop()
