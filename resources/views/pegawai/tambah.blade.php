@extends('template.tampilan')

@section('title', 'TambahTugas')

@section('isikonten')

    <div id="tampilanedit">
        <h3>Tambah Pegawai</h3>

        <form action="/pegawai/store" method="post">
            {{ csrf_field() }}
            Nama <input type="text" name="nama" required="required"> <br />
            Jabatan <input type="text" name="jabatan" required="required"> <br />
            Umur <input type="number" name="umur" required="required"> <br />
            Alamat <textarea name="alamat" required="required"></textarea> <br />
            <input type="submit" value="Simpan Data">
            <a href="/pegawai"> Kembali</a>
        </form>
    </div>

@endsection
