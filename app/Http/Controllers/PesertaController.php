<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Skema;
use Illuminate\Pagination\Paginator;


class PesertaController extends Controller
{
    public function index()
{
    $pesertas = Peserta::paginate(10);
    return view('peserta.index', compact('pesertas'));
}

public function create()
{
    $skemas = Skema::all();
    return view('peserta.create', compact('skemas'));
}

    public function store(Request $request)
    {
        $request->validate([
            'Kd_skema' => 'required',
            'Nm_peserta' => 'required',
            'Jekel' => 'required',
            'Alamat' => 'required',
            'No_hp' => 'required',
        ]);

        Peserta::create($request->all());

        return redirect()->route('peserta.index')->with('success', 'Peserta sertifikasi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $peserta = Peserta::findOrFail($id);
        return view('peserta.edit', compact('peserta'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nm_peserta' => 'required',
            'Jekel' => 'required',
            'Alamat' => 'required',
            'No_hp' => 'required',
        ]);

        $peserta = Peserta::findOrFail($id);
        $peserta->update($request->all());

        return redirect()->route('peserta.index')->with('success', 'Data peserta sertifikasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $peserta = Peserta::findOrFail($id);
        $peserta->delete();

        return redirect()->route('peserta.index')->with('success', 'Data peserta sertifikasi berhasil dihapus.');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $pesertas = Peserta::where('Nm_peserta', 'like', '%'.$search.'%')
                            ->orWhere('Jekel', 'like', '%'.$search.'%')
                            ->orWhere('Alamat', 'like', '%'.$search.'%')
                            ->orWhere('No_hp', 'like', '%'.$search.'%')
                            ->paginate(10);
        return view('peserta.index', compact('pesertas'));
    }
    
}
