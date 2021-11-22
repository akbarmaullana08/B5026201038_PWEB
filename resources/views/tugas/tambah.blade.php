<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="text" name="idpegawai" required="required"> <br/>
		Tanggal <input type="text" name="tanggal" required="required"> <br/>
		Tugas <input type="text" name="tugas" required="required"> <br/>
		Status <input type="string" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
