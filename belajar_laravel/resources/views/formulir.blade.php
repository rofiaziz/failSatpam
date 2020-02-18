<!DOCTYPE html>
<html>
<head>
	<title>formulir </title>
</head>
<body>



		<form action="/formulir/proses" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token()?>">

			Nama :
			<input type="text" name="nama"> <br/>
			Alamat:
			<input type="text" name="alamat"> <br/>
			<input type="submit" name="Simpan">
		</form>
</body>
</html>