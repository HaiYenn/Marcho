<form action="{{ route('payment.update',['payment'=>$payments->id])}}" method="POST" role="form" enctype="multipart/form-data">
   @csrf
   @method("PUT")
   <div class="form-group">
  
   <label for="">Kiểu Thanh Toán</label>
   <input type="text" class="form-control" value="{{ $payments->type }}" id="" placeholder="" name="type">
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
  <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>