<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $fillable = [
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'buku_id',
        'user_id',
        'status'
    ];
    use HasFactory;

    #relation
    public function buku(){
        return $this->belongsTo(Buku::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
