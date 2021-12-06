@extends('template.tampilan')

@section('title', 'EditTugas')

@section('isikonten')

    <div id="tampilanedit">
        <h3>Edit Tugas</h3>

        @foreach ($tugas as $t)
            <form action="/tugas/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $t->ID }}"> <br />
                ID Pegawai<input type="text" name="idpegawai" required="required" value="{{ $t->IDPegawai }}"> <br />
                Tanggal<input type="text" name="tanggal" required="required" value="{{ $t->Tanggal }}"> <br />
                Tugas <input type="text" name="tugas" required="required" value="{{ $t->NamaTugas }}"> <br />
                Status <input type="string" name="status" required="required" value="{{ $t->Status }}"> <br />
                <input type="submit" value="Simpan Data">
                <a href="/tugas"> Kembali</a>
            </form>
        @endforeach
    </div>

@endsection
