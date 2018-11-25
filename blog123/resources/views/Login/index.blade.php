<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>

	<?php if (count($errors)>0): ?>
		<?php foreach ($errors->all() as $value): ?>
			<p><?= $value ?></p>
		<?php endforeach ?>
	<?php endif ?>

	<form action="{{route('postLogin')}}" method="POST" role="form">
		{{ csrf_field() }}
		<legend>Dang nhap</legend>
	
		<div class="form-group">
			<label for="">USER</label>
			<input type="text" class="form-control" id="" name="user" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">PASS</label>
			<input type="pass" class="form-control" id="" name="pass" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">Level</label>
			<input type="pass" class="form-control" id="" name="level" placeholder="Input field">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">LOGIN</button>
	</form>
</body>
</html>