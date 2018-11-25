@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
                    <form action="{{route('search')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="timKiem">
                            <input class="timKiem1" type="text" class="form-control" name="ten" placeholder="Search" >
                            <input class="timKiem2" type="submit" value="Go">
                        </div>
                    </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @if($dataSp==null)
         {{"khong tim thay san pham"}}
        @endif
        @foreach ($dataSp as $key=>$value )
        <div class="col-md-3 marginSp">
            <div class="card" style="width: 100%;">
                <a href="{{route('chiTietSanPham',$value['id'])}}"><img class="card-img-top anh2" src="{{$value['image']}}" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title">Ten :{{$value['tenSanPham']}}</h5>
                <p class="card-text">Chi tiet:{{$value['chiTiet']}}</p>
                <p class="card-text">Gia:
                @if($value['gia']==Null)
                    {{"lien he"}}
                @endif
                {{number_format($value['gia'])}}
                VND</p>
                {{-- <form action="{{route('muaHangg',$value['id'])}}" method="POST">
                    {{ csrf_field() }}
                    <input class="hidden" type="text" name="">
                    <input type="button" value="Mua hang">
                </form> --}}
                <a href="{{route('muaHangg',$value['id'])}}" class="btn btn-primary">mua hang</a>

              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@can ('edit-profile')
    <p>ban co the sua</p>
@endcan
<p>ahihihihihi</p>
