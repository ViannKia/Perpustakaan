@extends('dashboard')

@section('title')
    Hapus Data Peminjaman | Admin Perpustakaan
@endsection

@section('content')
    <h3>Hapus Data Peminjaman</h3>
    <div class="form-login">
        <h4>Ingin Menghapus Data Peminjaman ?</h4>
        <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
            <a href={{ url('/peminjaman/destroy', $pinjam->id_pinjam) }}>
                Yes
            </a>
        </button>
        <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
            <a href="/peminjaman">
                No
            </a>
        </button>
    </div>
@endsection
