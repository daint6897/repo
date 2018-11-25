@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('sanPham.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="form-group">
                    <label>Ten san pham</label>
                    <input type="text" class="form-control" name="tenSanPham">
                  </div>

                  <div class="form-group">
                    <label>Chi tiet san pham</label>
                    <input type="text" class="form-control" name="chiTiet">
                  </div>

                  <div class="form-group">
                    <label>so luong</label>
                    <input type="text" class="form-control" name="soLuong">
                  </div>
                  <div class="form-group">
                    <label>Gia</label>
                    <input type="text" class="form-control" name="gia">
                  </div>

                  <div class="form-group hidden">
                    <label>id nguoi ban</label>
                    <input type="text" class="form-control" name="idNguoiBan" value="{{Auth::user()->id}}">
                  </div>
                  <div class="form-group">
                    <label>Anh</label>
                    <input type="file" name="image" required="true">
                  </div>
                  <button type="submit" class="btn btn-primary">them san pham</button>
                </form>
    </div>
</div>
@endsection