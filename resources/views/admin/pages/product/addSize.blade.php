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
          <h3>Thêm Kích Cỡ</h3>
        </div>
        <div class="panel-body">
          <form action="{{ route('size.store') }}" method="POST" role="form" enctype="multipart/form-data">
             @csrf
            <div class="form-group  
            @error('size_name') has-error @enderror" >
              <label for="">Tên Size</label>
              <input type="text" class="form-control" id="" placeholder="Size S , M , L , ...." name="name">
              @error('size_name')
                  <div class="help-block">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
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
            <button type="submit" class="btn btn-primary">Thêm Mới</button>
          </form>
        </div>
      </div>
    </div>

        <div class="col-md-6">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading"><h3>Bảng Size</h3></div>
          <div class="panel-body">
       
          </div>
           
          <!-- Table -->
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Status</th>
                <th></th>
              
            
              </tr>
          
            </thead>
            <tbody>
              @foreach($sizeview as $val)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $val->size_name }}</td>
                <td>{{ ($val->size_status == 1 ?"Hiện" : "Ẩn") }}</td>
                <td>
                  <form action="{{ route('size.destroy',['id'=>$val->size_id]) }}" method="POST" onsubmit="return confirm('Ban co muon xoa')">
                    @method("DELETE")
                    @csrf
                    <button type="submit"  class="btn-danger btn">Xoa</button>
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
