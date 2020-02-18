<!DOCTYPE html>
<html>
<head>
	<title>View Induk</title>
</head>
<body>
	<header>
		<h2>View Induk</h2>
		<nav>
			<a href="/blog">Home</a>
			|
			<a href="/blog/tentang">Tentang</a>
			|
			<a href="/blog/kontak">Kontak</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>

	<!--Bagian Judul halaman -->
	<h3> @yield ('judul_halaman') </h3>

	<!--Bagian konten halaman-->
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
		
		<p>&copy; <a href="https://www.instagram.com/rofitsalisaziz"> Rofi Tsalis Aziz</a></p>
	</footer>
</body>
</html>