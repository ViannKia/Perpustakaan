@extends('dashboard')

@section('title')
Tambah Data Anggota | Admin Perpustakaan
@endsection

@section('content')
<h3 class="h3">Form Data Anggota</h3>
<div class="form-login">
  <form action="{{ url('/anggota/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="buku">NIS</label>
    <input class="input" type="text" name="nis" id="nis" placeholder="NIS" value="{{ old('nis') }}" />
    @error('nis')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Nama Anggota</label>
    <input class="input" type="text" name="nama_anggota" id="nama_anggota" placeholder="Nama Anggota" value="{{ old('nama_anggota') }}" />
    @error('nama_anggota')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Alamat</label>
    <input class="input" type="text" name="alamat" id="alamat" placeholder="Alamat" value="{{ old('alamat') }}" />
    @error('alamat')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection
