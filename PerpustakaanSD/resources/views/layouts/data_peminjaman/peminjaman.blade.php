@extends('dashboard')

@section('title')
    Data Peminjaman | Admin Perpustakaan
@endsection

@section('content')
    <h3>Data Peminjaman</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/peminjaman/tambah">Tambah Data</a>
    </button>
    <button type="button" class="btn">
        <a href="/peminjaman/cetak">Cetak</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Pinjam</th>
                <th>ID Buku</th>
                <th>Nama Peminjam</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Denda</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($datapinjam as $pinjam)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pinjam->id_pinjam }}</td>
                    <td>{{ $pinjam->id_buku }}</td>
                    <td>{{ $pinjam->nama_peminjam }}</td>
                    <td>{{ $pinjam->tanggal_peminjaman }}</td>
                    <td>{{ $pinjam->tanggal_pengembalian }}</td>
                    <td>{{ $pinjam->denda }}</td>
                    <td>
                        <a href="/peminjaman/edit/{{ $pinjam->id_pinjam }}">Edit</a>
                        <a href="/peminjaman/hapus/{{ $pinjam->id_pinjam }}">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
