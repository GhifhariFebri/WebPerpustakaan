<?php
namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BukuController extends Controller
{
    // Show buku untuk admin
    public function index()
    {
        $bukus = Buku::with('categories')->orderBy('id')->get();
        $kategoris = Kategori::all();
        return view('librarian.buku', compact('bukus', 'kategoris'));
    }

    // Show buku untuk user
    public function indexmember()
    {
        $bukus = Buku::with('categories')->orderBy('id')->get();
        $kategoris = Kategori::all();
        $peminjamans = peminjaman::all();
        return view('members.perpustakaan', compact('bukus', 'kategoris', 'peminjamans'));
    }

    // Show buku yang dipinjam user lgin
    public function indexpinjammember()
    {
        $kategoris = Kategori::all();
        $time = now();
        $peminjamans = Peminjaman::where('user_id', Auth::user()->id)->where('status', 'dipinjam')->get();
        $bukus = Buku::whereIn('id', $peminjamans->pluck('buku_id'))->with('categories')->orderBy('id')->get();
        return view('members.buku_pinjam', compact('bukus', 'kategoris', 'peminjamans', 'time'));
    }
    // Add Buku
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'tanggal_terbit' => 'required|date',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'sinopsis' => 'required|string',
            'categories' => 'required|array'
        ]);

        $buku = Buku::create($validated);
    
        $buku->categories()->sync($request->categories);

        return back()->with('success', 'Kegiatan berhasil dihapus.');
    }

// Update Buku
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'tanggal_terbit' => 'required|date',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'sinopsis' => 'required|string',
            'categories' => 'required|array'
        ]);

        $buku = Buku::findOrFail($id);
        
        $buku->update($validated);
        $buku->categories()->sync($request->categories);

        return back()->with('success', 'Kegiatan berhasil dihapus.');
    }

// Delete
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return back()->with('success', 'Kegiatan berhasil dihapus.');
    }
}
