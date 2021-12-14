@extends('template.tampilan')

@section('title', 'EditTugas')

@section('isikonten')

    <div id="tampilandetail">
        <center><h3>Detail Pegawai</h3></center>

        @foreach ($pegawai as $p)

        <table class="table table-success table-striped">
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td>{{ $p->pegawai_nama }}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td> : </td>
                <td>{{ $p->pegawai_jabatan }}</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td> : </td>
                <td>{{ $p->pegawai_umur }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : </td>
                <td>{{ $p->pegawai_alamat }}</td>
            </tr>
        </table>
        <a href="/pegawai"> Kembali</a>
        @endforeach
    </div>

@endsection


