<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'nama',
        'tanggal_terbit',
        'penulis',
        'penerbit',
        'sinopsis'
    ];
    use HasFactory;

    #Relation many to many with pivot table
    public function categories()
    {
        return $this->belongsToMany(Kategori::class, 'buku_kategoris', 'buku_id', 'kategori_id');
    }
    public function peminjamans()
    {
        return $this->hasMany(peminjaman::class);
    }

    #Helper to check status
    public function isDipinjam()
    {
        return $this->peminjamans()->where('status', 'dipinjam')->exists();
    }
}
