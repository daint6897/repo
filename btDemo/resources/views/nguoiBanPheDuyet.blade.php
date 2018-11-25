@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>Ten san pham</th>
                    <th>Anh</th>
                    <th>Nguoi mua hang</th>
                    <th>Dia chi</th>
                    <th>So dien thoai</th>
                    <th>Giao Hang</th>
                    <th>Ko Giao Hang</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($dataSanPhamPheDuyet as $key=>$value )
                    <tr>
                        <td>{{$value['tenSanPham']}}</td>
                        <td><img src={{asset($value['image'])}} class="img-thumbnail anh"  alt="image"></td>
                        <td>{{$value['tenUser']}}</td>
                        <td>{{$value['diaChi']}}</td>
                        <td>{{$value['soDienThoai']}}</td>
                        <td><a href="{{route('nguoiBanPheDuyetSanPham', ['idSanPham' =>$value["idSanPham"] ])}}"><button type="button" class="btn btn-primary">Giao Hang</button></a></td>
                        <td><a href="{{route('nguoiBanXoaPheDuyetSanPham', ['idSanPham' =>$value["idSanPham"] ])}}"><button type="button" class="btn btn-primary">xoa</button></a></td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection