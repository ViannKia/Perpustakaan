@extends('dashboard')

@section('title')
    Hapus Data Anggota | Admin Perpustakaan
@endsection

@section('content')
    <h3>Hapus Data Anggota</h3>
    <div class="form-login">
        <h4>Ingin Menghapus Data Anggota ?</h4>
        <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
            <a href={{ url('/anggota/destroy', $anggota->nis) }}>
                Yes
            </a>
        </button>
        <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
            <a href="/buku">
                No
            </a>
        </button>
    </div>
@endsection
