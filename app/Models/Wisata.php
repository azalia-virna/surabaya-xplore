<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======
    public $wisatas;
>>>>>>> 3caeca8 (add some features)

    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'file_name'
    ];
}
