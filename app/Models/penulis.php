<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    use HasFactory;
    protected $fillable = [
        'sampul',
         'judul',
         'sinopsis',
         'genre',
         'tokohUtama',
         'tglrilis',
         'penulis',
     ];
}
