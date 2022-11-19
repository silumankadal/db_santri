<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table = 'santris';
    protected $fillable = [
        'nama',
        'gender',
        'alamat',
        'pt',
        'jurusan',
        'status'
    ];
    public $timestamps = false;
}
