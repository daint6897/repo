@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>Ten san pham</th>
                    <th>Anh</th>
                    <th>Sua</th>
                    <th>Xoa</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($dataSanPham as $key=>$value )
                    <tr>
                        <td>{{$value['tenSanPham']}}</td>
                        <td><img src={{asset($value['image'])}} class="img-thumbnail anh"  alt="image"></td>
                        <td><a href="{{route('sanPham.edit', ['idSanPham' =>$value["id"] ])}}"><button type="button" class="btn btn-primary">Sua</button></a></td>
                        <td>
                        <form action="{{ route('sanPham.destroy',[$value['id']]) }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="Xoa">
                        </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
