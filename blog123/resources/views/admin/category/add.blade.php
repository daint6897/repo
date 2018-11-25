@extends('admin.master')
@section('content')
@section('title','add')
<form action="{{route('postAddCategory')}}" method="POST" style="width: 650px;">
	{{ csrf_field() }}
	<fieldset>
		<legend>Thông Tin Danh Mục</legend>
		<span class="form_label">Danh mục cha:</span>
		<span class="form_item">
			<select name="sltCate" class="select">
				<option value="0">--- ROOT ---</option>
				<?php menuMulti($dataCate);  ?>
			</select>
		</span><br />
		<span class="form_label">Tên danh mục:</span>
		<span class="form_item">
			<input type="text" name="txtCateName" value="{{old('txtCateName')}}" class="textbox" />
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnCateAdd" value="Thêm danh mục" class="button" />
		</span>
	</fieldset>
</form>

@endsection()