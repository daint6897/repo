@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	@foreach ($dataSanPhamChiTiet as $key=>$value )
    	   <div class="card">
				<div class="container-fliud">
					<div class="wrapper row">
						<div class="preview col-md-6">
							  <div class="img-fluid" id="pic-1"><img class="img-fluid anhChiTiet" src="{{$value->image}}" /></div>
						</div>
						<div class="details col-md-6">
							<h3 class="product-title">{{$value->tenSanPham}}</h3>
							<p class="product-description">{{$value->chiTiet}}</p>
							<h4 class="price">Gia: <span>{{number_format($value->gia)}} VND</span></h4>
							<p class="vote"><strong>Duoc ban boi</strong> <strong> : {{$value->name}}</strong></p>
							<div class="action">
								<a href="{{route('muaHangg',$value->id)}}" class="btn btn-primary">mua hang</a>
							</div>
						</div>
					</div>
				</div>
			</div>
    	@endforeach
@endsection