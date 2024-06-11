@extends('dashboard')

@section('title')
    Hapus Data Buku | Admin Perpustakaan
@endsection

@section('content')
    <h3>Hapus Data Buku</h3>
    <div class="form-login">
        <h4>Ingin Menghapus Data Buku ?</h4>
        <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
            <a href={{ url('/buku/destroy', $buku->id_buku) }}>
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
