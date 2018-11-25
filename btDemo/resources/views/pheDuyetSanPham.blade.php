@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>Ten san pham</th>
                    <th>Anh</th>
                    <th>Phe duyet</th>
                    <th>Ko phe duyet</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($dataSanPhamPheDuyet as $key=>$value )
                    <tr>
                        <td>{{$value['tenSanPham']}}</td>
                        <td><img src={{asset($value['image'])}} class="img-thumbnail anh"  alt="image"></td>
                        <td><a href="{{route('adminPheDuyetSanPham', ['idSanPham' =>$value["id"] ])}}"><button type="button" class="btn btn-primary">phe duyet</button></a></td>
                        <td><a href="{{route('adminXoaPheDuyetSanPham', ['idSanPham' =>$value["id"] ])}}"><button type="button" class="btn btn-primary">xoa</button></a></td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection