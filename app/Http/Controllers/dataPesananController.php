<?php

namespace App\Http\Controllers;

use App\Models\data_pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class dataPesananController extends Controller
{
    //
    public function index()
    {
        $pesanan = data_pesanan::paginate(5);
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

        // Simpan ke model DataPesanan
        $data = ([
            'tanggal_pesanan' => $request->tanggal_pesanan,
            'total_pesanan' => $request->total_pesanan,
        ]);

        DB::table('data_pesanan')->insert($data);

        // Redirect kembali ke halaman pesanan dengan pesan sukses
        return redirect()->route('data-pesanan')->with('success', 'Pesanan berhasil ditambahkan');
    }
}