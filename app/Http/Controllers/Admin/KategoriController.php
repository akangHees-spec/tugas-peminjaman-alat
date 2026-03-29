<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $categories = Kategori::latest()->paginate(10);
        return view('admin.kategori.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:225',
            'deskripsi' => 'nullable|string'
        ]);

        Kategori::create($request->all());
        return redirect()->back()->with('Success', 'Kategori Berhasil Dibuat :)');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $category = Kategori::findOrFail($id);
        $category->update($request->all());

        return redirect()->back()->with('success', 'Ketegori Berhasil Di update');
    }

    public function destroy($id)
    {
        $category = Kategori::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Kategori Berhasil Di hapus.');
    }
}
