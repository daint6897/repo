@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ route('sanPham.update',[$item->id]) }}" method="POST">
          <input type="hidden" name="_method" value="PATCH">
                    {{ csrf_field() }}
                  <div class="form-group">
                    <label>Ten san pham</label>
                    <input type="text" class="form-control" name="tenSanPham" value="{{$item->tenSanPham}}">
                  </div>
                  <div class="form-group">
                    <label>Chi tiet san pham</label>
                    <input type="text" class="form-control" name="chiTiet" value="{{$item->chiTiet}}">
                  </div>

                  <div class="form-group">
                    <label>so luong</label>
                    <input type="text" class="form-control" name="soLuong" value="{{$item->soLuong}}">
                  </div>
                  <div class="form-group">
                    <label>Gia</label>
                    <input type="text" class="form-control" name="gia">
                  </div>
                  <div class="form-group hidden">
                    <label>id nguoi ban</label>
                    <input type="text" class="form-control" name="idNguoiBan" value="{{Auth::user()->id}}">
                  </div>
                  <div class="form-group hidden">
                    <input type="text" name="image" required="true" value="{{$item->image}}">
                  </div>
                  <button type="submit" class="btn btn-primary">Cap nhat pham</button>
                </form>
    </div>
</div>
@endsection