@extends('dashboard')

@section('title')
Edit Data Buku | Admin Perpustakaan
@endsection

@section('content')
<h3>Edit Data Buku</h3>
<div class="form-login">
  <form action="{{ url('/buku/update/' . $buku->id_buku) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="id_buku">ID Buku</label>
    <input class="input" type="text" name="id_buku" id="id_buku" placeholder="ID Buku"
      value="{{ old('id_buku', $buku->id_buku) }}" />
    @error('id_buku')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Nama Buku</label>
    <input class="input" type="text" name="nama_buku" id="nama_buku" placeholder="Nama Buku"
      value="{{ old('nama_buku', $buku->nama_buku) }}" />
    @error('nama_buku')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Penerbit</label>
    <input class="input" type="text" name="penerbit" id="penerbit" placeholder="Penerbit"
      value="{{ old('penerbit', $buku->penerbit) }}" />
    @error('penerbit')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Kategori</label>
    <input class="input" type="text" name="kategori" id="kategori" placeholder="Kategori"
      value="{{ old('kategori', $buku->kategori) }}" />
    @error('kategori')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
