<?php

namespace App\Http\Controllers;

use App\Models\data_pesanan;
use Illuminate\Http\Request;

class dataPesananController extends Controller
{
    //
    public function index(){
        $pesanan = data_pesanan::paginate(5);
        return view('dashboard.dataPesanan', compact('pesanan'));
    }
    
    public function hapus($id){
        try {
            data_pesanan::where('id_pesanan', $id)->delete();
            return to_route('dataPesanan');
        } catch (\Exception $e) {
            return to_route('dataPesanan')->withErrors('gagal hapus');
        }
    }
}