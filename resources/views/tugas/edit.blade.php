<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
		ID Pegawai <input type="text" name="idpegawai" required="required" value="{{ $t->IDPegawai }}"> <br/>
		Tanggal <input type="text" name="tanggal" required="required" value="{{ $t->Tanggal }}"> <br/>
		Tugas <input type="text" name="tugas" required="required" value="{{ $t->NamaTugas }}"> <br/>
		Status <input type="string" name="status" required="required" value="{{ $t->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
