<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Show Kategori
    public function index()
    {
        $kategoris = Kategori::orderBy('id')->get();
        return view('librarian.kategori', compact('kategoris'));
    }

// Store Kategori
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
        ]);

        Kategori::create($validatedData);

        return back()->with('success', 'Kegiatan berhasil dihapus.');
    }

    // Update Kategori
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->update($validatedData);

        return back()->with('success', 'Kegiatan berhasil dihapus.');
    }

    // Destroy Kategori
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return back()->with('success', 'Kegiatan berhasil dihapus.');
    }
}
