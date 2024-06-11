<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    public $table = "users";
    protected $primaryKey = 'email';
    protected $fillable = [
        'email', 'password'
    ];

    public $timestamps = false;
    public $incrementing = false;
}
