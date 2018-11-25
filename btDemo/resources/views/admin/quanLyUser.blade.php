@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>Ten user</th>
                    <th>dia chi</th>
                    <th>So dien thoai</th>
                    <th>Loai user</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($dataUser as $key=>$value )
                    <tr>
                        <td>{{$value['name']}}</td>
                        <td>{{$value['diaChi']}}</td>
                        <td>{{$value['soDienThoai']}}</td>
                        <td>
                            @if($value['level'] ==1)
                                {{"User"}}
                            @endif
                            @if($value['level'] ==2)
                                {{"Nguoi Ban"}}
                            @endif
                        </td>
                        <td>
                        <form action="{{ route('quanLyUserDestroy',[$value['id']]) }}" method="POST">
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
