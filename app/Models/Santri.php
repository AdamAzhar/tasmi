<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $table = 'santri';
    protected $fillable = [
        'nama_santri','juz_yang_ditasmi', 'penguji', 'tanggal'
    ];
    
}
