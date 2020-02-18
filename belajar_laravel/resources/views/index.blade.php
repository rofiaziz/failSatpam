<!DOCTYPE html>
<html>
<head>
	<title>view index</title>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<style type="text/css">
					.pagination li{
						float: left;
						list-style-type: none;
						margin:5px;
					}
				</style>
				<h3> Data Pegawai</h3>

				<a href="/pegawai/tambah">+ Tambah pegawai Baru</a>

				<br/>
				<br/>
				<p>Cari Data Pegawai :</p>
				<div class="form-group">
					
				</div>
				<form action="/pegawai/cari" method="GET">
					<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input type="submit" value="CARI">
				</form>
				<br/>
				<br/>
				<table class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					@foreach($pegawai as $p)
					<tr>
						<td>{{ $p->nama_pegawai}} </td>
						<td>{{ $p->jabatan_pegawai}} </td>
						<td>{{ $p->umur_pegawai}} </td>
						<td>{{ $p->alamat_pegawai}} </td>
						<td><a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->id_pegawai }}"> Edit </a>
							|
						<a class="btn btn-danger btn-sm " href="/pegawai/hapus/{{ $p->id_pegawai }}"> Hapus </a></td>
					</tr>
					@endforeach

				</table>

				<br/>
				Halaman : {{ $pegawai->currentPage() }} <br/>
				Jumlah Data : {{ $pegawai->total() }} <br/>
				Data Per Halaman : {{ $pegawai->perPage() }} <br/>
			 
			 
				{{ $pegawai->links() }}

			</div>
		</div>
	</div>
</body>
</html>