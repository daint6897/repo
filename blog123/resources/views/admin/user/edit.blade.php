@extends('admin.master')
@section('content')
@section('title','EDIT user')
<form action="" method="POST" style="width: 650px;">
	{{ csrf_field() }}
	<fieldset>	
		{{-- @foreach ($dataUserEdit as $key=>$value ) --}}
		    <legend>Thông Tin User</legend>
			<span class="form_label">Username:</span>
			<span class="form_item">
				<input type="text" name="txtUser" value="{{ $dataUserEdit['username'] }}" class="textbox" />
			</span><br />
			<span class="form_label">Password:</span>
			<span class="form_item">
				<input type="password" name="txtPass" class="textbox" />
			</span><br />
			<span class="form_label">Confirm password:</span>
			<span class="form_item">
				<input type="password" name="txtRepass" class="textbox" />
			</span><br />
			<span class="form_label">Level:</span>
			<span class="form_item">
				@if($dataUserEdit['level']>1)
				    <input type="radio" name="rdoLevel" value="1" /> Admin
				    <input type="radio" name="rdoLevel" value="2" checked="checked" /> Member       
				@endif
				@if($dataUserEdit['level']==1)
				    <input type="radio" name="rdoLevel" value="1" checked="checked" /> Admin
				    <input type="radio" name="rdoLevel" value="2"  /> Member       
				@endif		
			</span><br />
			<span class="form_label"></span>
			<span class="form_item">
				<input type="submit" name="btnUserEdit" value="Sửa User" class="button" />
			</span>     
		{{-- @endforeach --}}
		

		
	</fieldset>
</form>    
@endsection()