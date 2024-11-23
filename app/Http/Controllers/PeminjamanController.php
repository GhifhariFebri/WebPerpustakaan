<?php
namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    // Peminjaman
    public function store(Request $request)
    {
        $request->validate([
            'buku_id' => 'required|exists:bukus,id',
            'user_id' => 'required|exists:users,id',
        ]);

        peminjaman::create([
            'tanggal_peminjaman' => now(),
            'tanggal_pengembalian' => now(),
            'buku_id' => $request->buku_id,
            'user_id' => $request->user_id,
            'status' => 'dipinjam'
        ]);

        return redirect()->back()->with('success', 'Buku berhasil dipinjam.');
    }
    
    // Pengembalian
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tanggal_pengembalian' => 'string',
        ]);
    
        $peminjaman = Peminjaman::findOrFail($id);
    
        if ($peminjaman->user_id != Auth::user()->id) {
            return back()->with('error', 'Anda tidak memiliki akses untuk mengembalikan buku ini.');
        }
    
        $peminjaman->status = 'dikembalikan';
        $peminjaman->tanggal_pengembalian = $validatedData['tanggal_pengembalian'];
        $peminjaman->save();
    
        return back()->with('success', 'Buku berhasil dikembalikan.');
    }

    // Admin Page Peminjaman 
    public function index()
    {
        $peminjamans = peminjaman::all();
        return view('librarian.peminjaman', compact('peminjamans'));
    }
    
}
