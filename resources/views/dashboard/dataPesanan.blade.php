@extends('template.layout')
@section('konten')
    <div class="container flex h-screen bg-gray-100 capitalize p-5 w-full">
        <div class="sidebar flex flex-col gap-5 items-center w-2/12">
            <div class="logo my-10 text-3xl font-semibold">
                <div class="">restoran</div>
            </div>
            <div class="sidebar-menu text-xl flex flex-col gap-2">
                <div class="px-4 py-2">data menu</div>
                <div class="px-4 py-2">data pesanan</div>
            </div>
        </div>

        <div class="konten flex w-10/12">
            <div class="navbar">
                <div class="title">
                    <h1>data menu</h1>
                </div>
            </div>
            <div class="field">
                <table class="table-auto border-collapse border-2 border-black w-full text-center">
                    <thead>
                        <tr>
                            <th class="border-2 border-black px-4 py-2">ID Pesanan</th>
                            <th class="border-2 border-black px-4 py-2">Tanggal Pesanan</th>
                            <th class="border-2 border-black px-4 py-2">Total Pesanan</th>
                            <th class="border-2 border-black px-4 py-2">Edit</th>
                            <th class="border-2 border-black px-4 py-2">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $item)
                            <tr>
                                <td class="border-2 border-black px-4 py-2">{{ $item->id_pesanan }}</td>
                                <td class="border-2 border-black px-4 py-2">{{ $item->tanggal_pesanan }}</td>
                                <td class="border-2 border-black px-4 py-2">{{ $item->total_pesanan }}</td>
                                <td class="border-2 border-black px-4 py-2">
                                    <a href=""
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-lg">Edit</a>
                                </td>
                                <td class="border-2 border-black px-4 py-2">
                                    <form action="{{ route('data_pesanan.hapus', $item->id_pesanan) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded-lg">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
