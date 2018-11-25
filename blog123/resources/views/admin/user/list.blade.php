@extends('admin.master')
@section('content')
@section('title','LIST user')
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">STT</td>
		<td>Username</td>
		<td>Level</td>
		<td class="action_col">Quản lý?</td>
	</tr>
    @foreach ($dataUser as $key=>$value )
        <tr class="list_data">
            <td class="aligncenter">1</td>
            <td class="list_td aligncenter">{{$value['username']}}</td>
            <td class="list_td aligncenter"><span style="color: red; font-weight: bold;">
                @if($value['level']==1)
                    {{'SupperAdmin'}}
                @endif
                @if($value['level']==2)
                    {{'Admin'}}
                @endif      
                @if($value['level']==3)
                    {{'Member'}}
                @endif     
            </span></td>
            <td class="list_td aligncenter">
                <a href="{{route('deleteUser', ['id' =>$value["id"] ])}}"><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                <a href="{{route('getEditUser', ['id' =>$value["id"] ])}}"><img src="images/edit.png" />
            </td>
        </tr>
    @endforeach
	
	
</table>
@endsection()