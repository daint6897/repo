<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }} " />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }} " />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-4">

				@if(count($errors)>0)
		            @foreach ($errors->all() as $value )
		                <p>{{$value}}</p>
		            @endforeach
		        @endif

				<form action="{{route('user.store')}}" method="POST">
					{{ csrf_field() }}
				  <div class="form-group">
				    <label ">User Name:</label>
				    <input type="text" class="form-control" name="userName">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" id="pwd" name="pass">
				  </div>
				  <div class="form-group">
				    <label ">Dia chi:</label>
				    <input type="text" class="form-control" name="diaChi">
				  </div>
				  <div class="form-group">
				    <label ">Email:</label>
				    <input type="email" class="form-control" name="email">
				  </div>
				  <div class="form-group">
				    <label ">So dien thoai</label>
				    <input type="text" class="form-control" name="soDienThoai">
				  </div>

				  <div class="form-group">
				    <label "> Nguoi mua hang hay nguoi ban </label>
					    <div class="radio">
							  <label><input type="radio" value="1" name="level">Nguoi mua</label>
							</div>
							<div class="radio">
							  <label><input type="radio" value="2" name="level">Nguoi ban</label>
							</div>
				  </div>


				  <button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>