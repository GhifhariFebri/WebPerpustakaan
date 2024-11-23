<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku_kategori extends Model
{
    protected $fillable = [
        'buku_id',
        'kategori_id'

    ];
    use HasFactory;

    public function buku(){
        return $this->belongsTo(Buku::class);
    }
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    use HasFactory;
}
