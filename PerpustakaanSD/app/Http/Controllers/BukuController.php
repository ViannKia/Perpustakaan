<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class BukuController extends Controller
{
    public function index()
    {
        $data_buku = Buku::orderBy('id_buku', 'DESC')->get();
        return view('layouts.data_buku.buku', compact('data_buku'));
    }

    public function create()
    {
        return view('layouts.data_buku.buku-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_buku' => 'required',
            'nama_buku' => 'required',
            'penerbit' => 'required',
            'kategori' => 'required',
        ]);

        Buku::create([
            'id_buku' => $request->id_buku,
            'nama_buku' => $request->nama_buku,
            'penerbit' => $request->penerbit,
            'kategori' => $request->kategori,
        ]);

        return redirect('/buku');
    }

    public function edit($id_buku)
    {
        $buku = Buku::find($id_buku);
        return view('layouts.data_buku.buku-edit', compact('buku'));
    }

    public function update(Request $request, $id_buku)
    {
        $this->validate($request, [
            'id_buku' => 'required',
            'nama_buku' => 'required',
            'penerbit' => 'required',
            'kategori' => 'required',
        ]);

        $buku = Buku::find($id_buku);

        $buku->update([
            'id_buku' => $request->id_buku,
            'nama_buku' => $request->nama_buku,
            'penerbit' => $request->penerbit,
            'kategori' => $request->kategori,
        ]);

        return redirect('/buku');
    }

    public function delete($id_buku)
    {
        $buku = Buku::find($id_buku);
        return view('layouts.data_buku.buku-hapus', compact('buku'));
    }

    public function destroy($id_buku)
    {
        $buku = Buku::find($id_buku);
        $buku->delete();
        return redirect('/buku');
    }

    public function cetak()
    {
        $databuku = Buku::all();
        $pdf = PDF::loadview('layouts.data_buku.buku-report', compact('databuku'));
        return $pdf->download('laporan-data-buku.pdf');
    }

}
