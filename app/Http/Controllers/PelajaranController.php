<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function index()
    {
        $Pelajarans = Pelajaran::all();
        return view('Pelajarans.index', compact('Pelajarans'));
    }

    public function create()
    {
        return view('Pelajarans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Pelajaran::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('Pelajarans.index')->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }

    public function show($id)
    {
        $Pelajaran = Pelajaran::findOrFail($id);
        return view('Pelajarans.show', compact('Pelajaran'));
    }

    public function edit($id)
    {
        $Pelajaran = Pelajaran::findOrFail($id);
        return view('Pelajarans.edit', compact('Pelajaran'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $Pelajaran = Pelajaran::findOrFail($id);
        $Pelajaran->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('Pelajarans.index')->with('success', 'Mata pelajaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Pelajaran::findOrFail($id)->delete();
        return redirect()->route('Pelajarans.index')->with('success', 'Mata pelajaran berhasil dihapus.');
    }
}
