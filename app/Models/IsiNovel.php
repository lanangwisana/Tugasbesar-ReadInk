<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsiNovel extends Model
{
    use HasFactory;
    protected $table = 'isicerita';
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'judul',
        'isicerita'
    ];
}
