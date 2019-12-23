<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="name" required="required"> <br/>
		Jabatan <input type="text" name="role" required="required"> <br/>
		Umur <input type="number" name="email" required="required"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>