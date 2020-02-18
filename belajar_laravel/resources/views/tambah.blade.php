<!DOCTYPE html>
<html>
<head>
	<title>membuat view tambah pegawai</title>
</head>
<body>


	<h3>Data Pegawai</h3>


	<a href="/pegawai"> kembali </a>	
	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }} 
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>