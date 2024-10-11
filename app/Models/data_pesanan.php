<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pesanan extends Model
{
    use HasFactory;
        // Tentukan nama tabel
        protected $table = 'data_pesanan';

        // Jika primary key bukan 'id', tentukan nama primary key
        protected $primaryKey = 'id_pesanan';
    
        // Tentukan kolom-kolom yang dapat diisi
        protected $fillable = [
            'tanggal_pesanan',
            'total_pesanan',
            'harga',
        ];
    
        // Jika tidak menggunakan timestamps, nonaktifkan
        public $timestamps = true;    
}