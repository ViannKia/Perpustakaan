<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'data_peminjaman';
    protected $primaryKey = 'id_pinjam';
    public $incrementing = false;
    protected $fillable = ['id_pinjam', 'id_buku', 'nama_peminjam', 'tanggal_peminjaman', 'tanggal_pengembalian', 'denda'];
    public $timestamps = false;
}
