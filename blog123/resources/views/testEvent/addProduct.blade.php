<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AddProdcut</title>
</head>
<body>
	<form action="" method="POST">
		{{ csrf_field() }}
		<fieldset class="form-group">
			<label for="formGroupExampleInput2">Ten san pham</label>
			<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Example input" name="tenSanPham">
		</fieldset>
		<input class="btn btn-primary" type="submit" value="Them">
	</form>
</body>
</html>