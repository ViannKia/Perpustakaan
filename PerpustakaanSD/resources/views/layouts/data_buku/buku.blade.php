@extends('dashboard')

@section('title')
    Data Buku | Admin Perpustakaan
@endsection

@section('content')
    <h3>Data Buku</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/buku/tambah">Tambah Data</a>
    </button>
    <button type="button" class="btn">
        <a href="/buku/cetak">Cetak</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Buku</th>
                <th>Nama Buku</th>
                <th>Penerbit</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data_buku as $buku)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $buku->id_buku }}</td>
                    <td>{{ $buku->nama_buku }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->kategori }}</td>
                    <td>
                        <a href="/buku/edit/{{ $buku->id_buku }}">Edit</a>
                        <a href="/buku/hapus/{{ $buku->id_buku }}">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
