<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }} " />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }} " />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-4">
				<form action="" method="POST">
					{{ csrf_field() }}
				  <div class="form-group">
				    <label ">User Name:</label>
				    <input type="text" class="form-control" name="userName">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" id="pwd" name="pass">
				  </div>
				  <button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>