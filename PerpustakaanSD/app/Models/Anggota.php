<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'data_anggota';
    protected $primaryKey = 'nis';
    public $incrementing = false;
    protected $fillable = ['nis', 'nama_anggota', 'alamat'];
    public $timestamps = false;
}
