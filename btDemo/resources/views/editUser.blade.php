@extends('layouts.app')

@section('content')
<div class="container">
  @foreach ($item as $key=>$value )
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <form action="{{ route('updateUser',[$value['id']]) }}" method="POST">
          <input type="hidden" name="_method" value="PATCH">
                    {{ csrf_field() }}
                  <div class="form-group">
                    <label>Ten user</label>
                    <input type="text" class="form-control" name="name" value="{{$value['name']}}">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{$value['email']}}">
                  </div>
                  <div class="form-group">
                    <label>Dia chi</label>
                    <input type="text" class="form-control" name="diaChi" value="{{$value['diaChi']}}">
                  </div>
                  <div class="form-group">
                    <label>So dien thoai</label>
                    <input type="text" class="form-control" name="soDienThoai" value="{{$value['soDienThoai']}}">
                  </div>
                  <button type="submit" class="btn btn-primary">Cap nhat</button>
                </form>
      </div>
    </div>
  @endforeach
</div>
@endsection