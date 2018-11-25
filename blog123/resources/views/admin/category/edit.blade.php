@extends('admin.master')
@section('content')
@section('title','edit')
<form action="" method="POST" style="width: 650px;">
	{{ csrf_field() }}
			<fieldset>
				<legend>Thông Tin Danh Mục</legend>
				<span class="form_label">Danh mục cha:</span>
				<span class="form_item">
					<select name="sltCate" class="select" value="">
						<option value="0">--- ROOT ---</option>
						<?php menuMulti($dataCateEdit,0,'---|',$dataParent['parent_id']);  ?>
					</select>
				
				</span><br />
				<span class="form_label">Tên danh mục:</span>
				<span class="form_item">
					<input type="text" name="txtCateName" class="textbox" value="{{$dataParent['name']}}" />
				</span><br />
				<span class="form_label"></span>
				<span class="form_item">
					<input type="submit" name="btnCateEdit" value="Sửa danh mục" class="button" />
				</span>
			</fieldset>
		</form>
		
@endsection()

<?php 
	// echo $dataParent['parent_id'];
?>

