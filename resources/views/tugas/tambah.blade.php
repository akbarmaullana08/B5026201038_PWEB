@extends('template.tampilan')

@section('title', 'TambahTugas')

@section('isikonten')

    <div id="tampilanedit">
        <h3>Tambah Tugas</h3>

        <form action="/tugas/store" method="post">
            {{ csrf_field() }}
            ID Pegawai <input type="text" name="idpegawai" required="required"> <br />
            Tanggal <input type="text" name="tanggal" required="required"> <br />
            Tugas <input type="text" name="tugas" required="required"> <br />
            Status <input type="string" name="status" required="required"> <br />
            <input type="submit" value="Simpan Data">
            <a href="/tugas"> Kembali</a>
        </form>
    </div>


@endsection
