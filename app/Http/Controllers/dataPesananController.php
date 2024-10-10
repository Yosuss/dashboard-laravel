<?php

namespace App\Http\Controllers;

use App\Models\data_pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataPesananController extends Controller
{
    //
    public function index()
    {
        $pesanan = data_pesanan::all();
        return view('dashboard.data-pesanan', compact('pesanan'));
    }

    public function hapus($id)
    {
        try {
            data_pesanan::where('id_pesanan', $id)->delete();
            return to_route('data-pesanan');
        } catch (\Exception $e) {
            return to_route('data-pesanan')->withErrors('gagal hapus');
        }
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'tanggal_pesanan' => 'required',
            'total_pesanan' => 'required',
        ]);

        // simpan data ( simple )
        // $data = new data_pesanan();
        // $data->tanggal_pesanan = $request->tanggal_pesanan;
        // $data->total_pesanan = $request->total_pesanan;
        // $data->save();

        // Simpan ke model DataPesanan
        $data = ([
            'tanggal_pesanan' => $request->tanggal_pesanan,
            'total_pesanan' => $request->total_pesanan,
        ]);
        DB::table('data_pesanan')->insert($data);

        // Redirect kembali ke halaman pesanan dengan pesan sukses
        return redirect()->route('data-pesanan')->with('success', 'Pesanan berhasil ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        $pesanan = data_pesanan::findOrFail($id);
        return view('dashboard.data-pesanan', compact('pesanan'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'subject' => 'required',
        ]);

        // update data ( simple )
        // $data = new data_pesanan();
        // $data->tanggal_pesanan = $request->tanggal_pesanan;
        // $data->total_pesanan = $request->total_pesanan;
        // $data->update();

        $pesanan = data_pesanan::findOrFail($id);
        try {
            $pesanan->tanggal_pesanan = $request->input('tanggal_pesanan');
            $pesanan->total_pesanan = $request->input('total_pesanan');
            $pesanan->save();
            return redirect()->route('data-pesanan');
        } catch (\Exception $e) {
            return redirect()->route('data-pesanan')->withErrors('Gagal mengupdate data.');
        }
    }
}