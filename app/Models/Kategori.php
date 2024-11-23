<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'nama'
    ];
    use HasFactory;

    #Relation many to many with pivot table
    public function bukus()
    {
        return $this->belongsToMany(Buku::class, 'buku_kategoris', 'kategori_id', 'buku_id');
    }
}
