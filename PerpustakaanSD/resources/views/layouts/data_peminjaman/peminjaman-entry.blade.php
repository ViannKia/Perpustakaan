@extends('dashboard')

@section('title')
Tambah Data Peminjaman | Admin Perpustakaan
@endsection

@section('content')
<h3 class="h3">Form Data Peminjaman</h3>
<div class="form-login">
  <form action="{{ url('/peminjaman/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="id_pinjam">ID Pinjam</label>
    <input class="input" type="text" name="id_pinjam" id="id_pinjam" placeholder="ID Pinjam" value="{{ old('id_pinjam') }}" />
    @error('id_pinjam')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <div class="mb-4">
        <label for="nama" class="form-label">ID Buku</label>
        <select class="input @error('id_buku') is-invalid @enderror" name="id_buku">
            <option class="" value="">- Silahkan Pilih -</option>
            @foreach ($databuku as $items)
                <option value="{{ $items->id_buku }}">{{ $items->id_buku }}</option>
            @endforeach
        </select>
        @error('id_poin')
            <div class="invalid-feedback">Silahkan Mengisi Id Buku</div>
        @enderror
    </div>

    <label for="nama_peminjam">Nama Peminjam</label>
    <input class="input" type="text" name="nama_peminjam" id="nama_peminjam" placeholder="Nama Peminjam" value="{{ old('nama_peminjam') }}" />
    @error('nama_peminjam')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

        <label for="a" class="form-label">Tanggal Peminjaman</label>
        <input type="date" class="input" id="tanggal_peminjaman" name="tanggal_peminjaman"
            value="{{ old('tanggal_peminjaman') }}" placeholder="Masukan Tanggal Peminjaman">

        <label for="a" class="form-label">Tanggal Pengembalian</label>
        <input type="date" class="input" id="tanggal_pengembalian" name="tanggal_pengembalian"
            value="{{ old('tanggal_pengembalian') }}" placeholder="Masukan Tanggal Pengembalian">

    <label for="price">Denda</label>
    <input class="input" type="text" name="denda" id="denda" placeholder="Denda" value="{{ old('denda') }}" />
    @error('denda')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection
