@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>Ten San Pham</th>
                    <th>Anh</th>
                    <th>id nguoi ban</th>
                    <th>Xoa</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($dataSanPham as $key=>$value )
                    <tr>
                        <td>{{$value['tenSanPham']}}</td>
                        <td><img src={{asset($value['image'])}} class="img-thumbnail anh"  alt="image"></td>
                        <td>{{$value['idNguoiBan']}}</td>
                        <td>
                        <form action="{{ route('quanLySanPhamDestroy',[$value['id']]) }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="Xoa">
                        </form>
                        </td>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
