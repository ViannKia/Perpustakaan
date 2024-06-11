<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

use const PHPSTORM_META\ANY_ARGUMENT;

class AnggotaController extends Controller
{
    public function index()
    {
        $dataanggota = Anggota::all();
        return view('layouts.data_anggota.anggota', compact('dataanggota'));
    }

    public function create()
    {
        return view('layouts.data_anggota.anggota-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nis' => 'required',
            'nama_anggota' => 'required',
            'alamat' => 'required',
        ]);

        Anggota::create([
            'nis' => $request->nis,
            'nama_anggota' => $request->nama_anggota,
            'alamat' => $request->alamat,
        ]);

        return redirect('/anggota');
    }

    public function edit($anggota)
    {
        $anggota = Anggota::find($anggota);
        return view('layouts.data_anggota.anggota-edit', compact('anggota'));
    }

    public function update(Request $request, $anggota)
    {
        $this->validate($request, [
            'nis' => 'required',
            'nama_anggota' => 'required',
            'alamat' => 'required',
        ]);

        $anggota = Anggota::find($anggota);

        $anggota->update([
            'nis' => $request->nis,
            'nama_anggota' => $request->nama_anggota,
            'alamat' => $request->alamat,
        ]);

        return redirect('/anggota');
    }

    public function delete($anggota)
    {
        $anggota = Anggota::find($anggota);
        return view('layouts.data_anggota.anggota-hapus', compact('anggota'));
    }

    public function destroy($anggota)
    {
        $anggota = Anggota::find($anggota);
        $anggota->delete();
        return redirect('/anggota');
    }

    public function cetak()
    {
        $dataanggota = Anggota::all();
        $pdf = PDF::loadview('layouts.data_anggota.anggota-report', compact('dataanggota'));
        return $pdf->download('laporan-data-anggota.pdf');
    }
}
