@extends('template.layout')
@section('konten')
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">

        <div class="bg-white p-8 rounded-lg shadow-md max-w-md ">
            <h2 class="text-2xl font-bold mb-6 text-center">Edit Pesanan</h2>
            <form action="{{ route('data-pesanan.update', $pesanan->id_pesanan) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_pesanan" class="block text-sm font-medium text-gray-700">id Pesanan</label>
                    <div name="id_pesanan" id="id_pesanan">{{ $pesanan->id_pesanan }}</div>
                    {{-- <input type="number" name="id_pesanan" id="id_pesanan" required
                        value="{{ $pesanan->id_pesanan }}"> --}}
                </div>
                <div class="mb-4">
                    <label for="tanggal_pesanan" class="block text-sm font-medium text-gray-700">Tanggal Pesanan</label>
                    <input type="date" name="tanggal_pesanan" id="tanggal_pesanan" required
                        value="{{ $pesanan->tanggal_pesanan }}">
                </div>
                <div class="mb-4">
                    <label for="total_pesanan" class="block text-sm font-medium text-gray-700">Total Pesanan</label>
                    <input type="number" name="total_pesanan" id="total_pesanan" required
                        value="{{ $pesanan->total_pesanan }}">
                </div>
                <div class="mb-4">
                    <label for="harga" class="block text-sm font-medium text-gray-700">harga</label>
                    <input type="number" name="harga" id="harga" required value="{{ $pesanan->harga }}">
                </div>
                <div class="btn flex gap-2">
                    <a href="{{ route('data-pesanan') }}"
                        class="w-full flex justify-center items-center bg-gray-400 text-white p-2 rounded-md hover:bg-gray-700">
                        <button type="submit">kembali</button>
                    </a>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700">Tambah</button>
                </div>
            </form>
        </div>

    </div>
@endsection
