@extends('dashboard')

@section('title')
Edit Data Anggota | Admin Perpustakaan
@endsection

@section('content')
<h3>Edit Data Anggota</h3>
<div class="form-login">
  <form action="{{ url('/anggota/update/' . $anggota->nis) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="nis">NIS</label>
    <input class="input" type="text" name="nis" id="nis" placeholder="NIS"
      value="{{ old('nis', $anggota->nis) }}" />
    @error('nis')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="nama_anggota">Nama Anggota</label>
    <input class="input" type="text" name="nama_anggota" id="nama_anggota" placeholder="Nama Anggota"
      value="{{ old('nama_anggota', $anggota->nama_anggota) }}" />
    @error('nama_anggota')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="alamat">Alamat</label>
    <input class="input" type="text" name="alamat" id="alamat" placeholder="Alamat"
      value="{{ old('alamat', $anggota->alamat) }}" />
    @error('alamat')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
