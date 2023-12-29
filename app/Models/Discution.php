<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discution extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'pertanyaan',
        'tanggal',
        'waktu',
    ];
}
