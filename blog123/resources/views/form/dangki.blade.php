<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dang ki</title>
</head>
<body>
	<?php if (count($errors) >0): ?>
		<ul>
			<?php foreach ($errors->all() as $er): ?>
				<li><?= $er ?></li>
			<?php endforeach ?>
			
		</ul>
	<?php endif ?>
	<form action="{{route('dangKi')}}" method="POST" role="form" enctype="multipart/form-data" >
		{{ csrf_field() }}
			
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">ten</label>
			<input type="text" class="form-control" name="ten" id="" placeholder="Input field">
			<p><?= $errors->first('ten') ?></p>
		</div>

		<div class="form-group">
			<label for="">pass</label>
			<input type="text" class="form-control" name="pass" id="" placeholder="Input field">
			<p><?= $errors->first('pass') ?></p>
		</div>
		
		<input type="file" class="form-control" name="imgUpload" id="" placeholder="Input field">
		
	
		<button type="submit" class="btn btn-primary">Luu</button>
	</form>
</body>
</html>