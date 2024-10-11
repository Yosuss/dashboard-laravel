@extends('template.layout')
@section('konten')
<div class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md max-w-md ">
        <h2 class="text-2xl font-bold mb-6 text-center">Tambah Pesanan</h2>
        <form action="{{ route('data-pesanan.update',$pesanan->id_pesanan) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="id_pesanan" class="block text-sm font-medium text-gray-700">id Pesanan</label>
                <div name="id_pesanan" id="id_pesanan">{{ $pesanan->id_pesanan }}</div>
            </div>
            <div class="mb-4">
                <label for="tanggal_pesanan" class="block text-sm font-medium text-gray-700">Tanggal Pesanan</label>
                <input type="date" name="tanggal_pesanan" id="tanggal_pesanan" required value="{{ $pesanan->tanggal_pesanan }}">
            </div>
            <div class="mb-4">
                <label for="total_pesanan" class="block text-sm font-medium text-gray-700">Total Pesanan</label>
                <input type="number" name="total_pesanan" id="total_pesanan" required value="{{ $pesanan->total_pesanan }}">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700">Tambah Pesanan</button>
        </form>
    </div>

</div>

@endsection