<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Models\Buku;
use Barryvdh\DomPDF\Facade\PDF;

class PeminjamanController extends Controller
{
    public function index()
    {
        $datapinjam = Peminjaman::all();
        return view('layouts.data_peminjaman.peminjaman', compact('datapinjam'));
    }

    public function create()
    {
        $databuku = Buku::all();
        $pinjam = new Peminjaman();
        return view('layouts.data_peminjaman.peminjaman-entry', compact(
            'pinjam','databuku'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_pinjam' => 'required',
            'id_buku' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'denda' => 'required',
        ]);

        Peminjaman::create([
            'id_pinjam' => $request->id_pinjam,
            'id_buku' => $request->id_buku,
            'nama_peminjam' => $request->nama_peminjam,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'denda' => $request->denda,
        ]);

        return redirect('/peminjaman');
    }

    public function edit($id_pinjam)
    {
        $databuku = Buku::all();
        $pinjam = Peminjaman::find($id_pinjam);
        return view('layouts.data_peminjaman.peminjaman-edit', compact('databuku','pinjam'));
    }

    public function update(Request $request, $id_pinjam)
    {
        $this->validate($request, [
            'id_pinjam' => 'required',
            'id_buku' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'denda' => 'required',
        ]);

        $pinjam = Peminjaman::find($id_pinjam);

        $pinjam->update([
            'id_pinjam' => $request->id_pinjam,
            'id_buku' => $request->id_buku,
            'nama_peminjam' => $request->nama_peminjam,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'denda' => $request->denda,
        ]);

        return redirect('/peminjaman');
    }

    public function delete($id_pinjam)
    {
        $pinjam = Peminjaman::find($id_pinjam);
        return view('layouts.data_peminjaman.peminjaman-hapus', compact('pinjam'));
    }

    public function destroy($id_pinjam)
    {
        $pinjam = Peminjaman::find($id_pinjam);
        $pinjam->delete();
        return redirect('/peminjaman');
    }

    public function cetak()
    {
        $datapinjam = Peminjaman::all();
        $pdf = PDF::loadview('layouts.data_peminjaman.peminjaman-report', compact('datapinjam'));
        return $pdf->download('laporan-data-peminjaman.pdf');
    }
}
