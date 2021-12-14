@extends('template.tampilan')

@section('title', 'IndexTugas')

@section('isikonten')


    <center><h3>Tugas Pegawai</h3></center>

    <a href="/tugas/tambah" class="btn btn-primary"> + Tambah</a>

    <br />
    <br />

    <table border="1" class="table table-success table-striped">
        <tr>
            <th>Nama Pegawai</th>
            <th>Tanggal</th>
            <th>Tugas</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach ($tugas as $t)
            <tr>
                <td>{{ $t->pegawai_nama }}</td>
                <td>{{ $t->Tanggal }}</td>
                <td>{{ $t->NamaTugas }}</td>
                <td>{{ $t->Status }}</td>
                <td>
                    <a href="/tugas/edit/{{ $t->ID }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/tugas/hapus/{{ $t->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
{{ $tugas->links() }}
@endsection
