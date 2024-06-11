@extends('dashboard')

@section('title')
    Data Anggota | Admin Perpustakaan
@endsection

@section('content')
    <h3>Data Anggota</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/anggota/tambah">Tambah Data</a>
    </button>
    <button type="button" class="btn">
        <a href="/anggota/cetak">Cetak</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Anggota</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dataanggota as $anggota)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $anggota->nis }}</td>
                    <td>{{ $anggota->nama_anggota }}</td>
                    <td>{{ $anggota->alamat }}</td>
                    <td>
                        <a href="/anggota/edit/{{ $anggota->nis }}">Edit</a>
                        <a href="/anggota/hapus/{{ $anggota->nis }}">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
