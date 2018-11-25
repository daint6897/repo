<!DOCTYPE html>
<html>
<head>
	<title>Welcome to All Laravel</title>
</head>
<body>
	<h1>GUI MAIL</h1>
	<form action="" method="POST" >
		{{ csrf_field() }}
		<p> Dien noi dung email</p>
		<input type="text" name="noiDungEmail">
		<input type="submit" name="sendMail" value="gui mail">
	</form>
</body>
</html>