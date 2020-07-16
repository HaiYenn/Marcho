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
          <h3>Thêm Màu</h3>
        </div>
        <div class="panel-body">
          <form action="{{ route('color.store')}}" method="POST" role="form" enctype="multipart/form-data">
           @csrf
           <div class="form-group">
           <label for="">Tên Màu</label>
           <input type="text" class="form-control" id="" placeholder="" name="color_name">
           @error('color_name')
           <div class="help-block">{{ $message }}</div>
            @enderror
         </div>
         
         <div class="form-group">
          <label for="">Mã Màu</label>
          <input type="color" class="form-control" id="" placeholder="" name="color_picker">
          @error('color_picker')
          <div class="help-block">{{ $message }}</div>
          @enderror
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
        <button type="submit" class="btn btn-primary">Thêm Mới</button>
      </form>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading"><h3>Bảng Màu</h3></div>
    <div class="panel-body">

    </div>

    <!-- Table -->
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>color_picker</th>
          <th>Status</th>
          <th></th>


        </tr>

      </thead>
      <tbody>
        @foreach($colorview as $val)
        <tr>
         <td>{{$loop->index+1}}</td>
         <td>{{$val->color_name}}</td>
         <td><span style="width: 50px;height: 50px;background: {{$val->color_picker}}">Color</span></td>
         <td>{{ ($val->color_status == 1)? 'Hiện' : 'Ản'}}</td>
         <td>
          <form action="{{route('color.destroy',['id'=>$val->color_id])}}" method="POST" accept-charset="utf-8" onsubmit="return confirm('Bạn có muốn xóa')">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn-danger btn" >Xóa</button>
          </form>

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

@stop()
