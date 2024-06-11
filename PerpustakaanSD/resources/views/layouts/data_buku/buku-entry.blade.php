@extends('dashboard')

@section('title')
Tambah Data Buku | Admin Perpustakaan
@endsection

@section('content')
<h3 class="h3">Form Data Buku</h3>
<div class="form-login">
  <form action="{{ url('/buku/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="buku">ID Buku</label>
    <input class="input" type="text" name="id_buku" id="id_buku" placeholder="ID Buku" value="{{ old('id_buku') }}" />
    @error('idbuku')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Nama Buku</label>
    <input class="input" type="text" name="nama_buku" id="nama_buku" placeholder="Nama Buku" value="{{ old('nama_buku') }}" />
    @error('nama_buku')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Penerbit</label>
    <input class="input" type="text" name="penerbit" id="penerbit" placeholder="Penerbit" value="{{ old('penerbit') }}" />
    @error('nama_buku')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Kategori Buku</label>
    <input class="input" type="text" name="kategori" id="kategori" placeholder="Kategori Buku" value="{{ old('kategori') }}" />
    @error('kategori')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection
