<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skema;

class SkemaController extends Controller
{
    public function index()
{
    $skemas = Skema::paginate(10); // Paginate the skemas

    return view('skema.index', compact('skemas'));
}

    public function create()
    {
        return view('skema.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Kd_skema' => 'required|unique:skema',
            'Nm_skema' => 'required',
            'Jenis' => 'required',
            'Jml_unit' => 'required|integer',
        ]);

        Skema::create($request->all());

        return redirect()->route('skema.index')->with('success', 'Skema sertifikasi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $skema = Skema::findOrFail($id);
        return view('skema.edit', compact('skema'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nm_skema' => 'required',
            'Jenis' => 'required',
            'Jml_unit' => 'required|integer',
        ]);

        $skema = Skema::findOrFail($id);
        $skema->update($request->all());

        return redirect()->route('skema.index')->with('success', 'Skema sertifikasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $skema = Skema::findOrFail($id);
        $skema->delete();

        return redirect()->route('skema.index')->with('success', 'Skema sertifikasi berhasil dihapus.');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $skemas = Skema::where('Nm_skema', 'like', '%'.$search.'%')
                        ->orWhere('Jenis', 'like', '%'.$search.'%')
                        ->orWhere('Kd_skema', 'like', '%'.$search.'%')
                        ->orWhere('Jml_unit', 'like', '%'.$search.'%')
                        ->paginate(10);
        return view('skema.index', compact('skemas'));
    }
}
