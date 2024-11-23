<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\buku_kategori;

class BukuKategoriController extends Controller
{
    public function index()
    {
        $buku_kategori = buku_kategori::all();
        return view('buku_kategori.index', compact('buku_kategori'));
    }

    public function create()
    {
        return view('buku_kategori.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'buku_id' => 'required|integer',
            'kategori_id' => 'required|integer'
        ]);

        buku_kategori::create($validatedData);

        return redirect()->route('buku_kategori.index')->with('success', 'Buku kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $buku_kategori = buku_kategori::findOrFail($id);
        return view('buku_kategori.edit', compact('buku_kategori'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'buku_id' => 'required|integer',
            'kategori_id' => 'required|integer'
        ]);

        $buku_kategori = buku_kategori::findOrFail($id);
        $buku_kategori->update($validatedData);

        return redirect()->route('buku_kategori.index')->with('success', 'Buku kategori berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $buku_kategori = buku_kategori::findOrFail($id);
        $buku_kategori->delete();

        return redirect()->route('buku_kategori.index')->with('success', 'Buku kategori berhasil dihapus.');
    }
}
