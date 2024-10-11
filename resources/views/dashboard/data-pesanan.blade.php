@extends('template.layout')
@section('konten')
    <div class="bg-gray-100 dashboard flex capitalize">
        <!-- Dashboard Menu -->
        <div class="bg-gray-100 w-2/12 h-screen items-center justify-center text-center">
            {{-- <div class="my-10 mx-6 mt-14 font-bold text-2xl">logo</div> --}}
            <img src="{{ asset('aset/dashboard.png') }}" alt="" class="my-10 mx-6 mt-14 w-20">
            <div class="list gap-2 justify-center items-center m-6 border-b-2">
                <a href="{{ url('/') }}">
                    <div class="text-left px-4 py-1 my-4 rounded-lg hover:bg-white hover:px-4 hover:py-1 hover:shadow">data
                        menu</div>
                </a>
                <a href="{{ url('/data-pesanan') }}">
                    <div class="bg-white px-4 py-1 shadow text-left my-4 rounded-lg">data pesanan</div>
                </a>
            </div>
            <div class="logout">
                <button class="bg-red-500 hover:bg-red-600 text-white font-bold px-6 py-1 shadow rounded-lg"><a
                        href="{{ url('/') }}">logout</a></button>
            </div>
        </div>
        <!-- Dashboard Menu end -->

        <!-- Main Dashboard -->
        <div class="main-dashboard w-10/12 bg-white rounded-3xl">

            <!-- Navbar -->
            @include('component.navbar')
            <!-- Navbar end -->

            <!-- Dashboard field -->
            @include('component.tambah-pesanan')

            <div class="form p-4">
                <table action="" class="data-pesanan text-center border-2 w-full">
                    <thead id="nav-data" class="nav-data">
                        <th class="font-bold border-2 py-1">no</th>
                        <th class="font-bold border-2 py-1">id_pesanan</th>
                        <th class="font-bold border-2 py-1">tanggal pesanan</th>
                        <th class="font-bold border-2 py-1">harga</th>
                        <th class="font-bold border-2 py-1">total pesanan</th>
                        <th colspan="2" class="font-bold border-2 py-1">Aksi</th>
                    </thead>

                    @foreach ($pesanan as $item)
                        <tbody id="data" class="data">
                            <td class="border-2">{{ $loop->iteration }}</td>
                            <td class="border-2">{{ $item->id_pesanan }}</td>
                            <td class="border-2">{{ $item->tanggal_pesanan }}</td>
                            <td class="border-2">{{ $item->harga }}</td>
                            <td class="border-2">{{ $item->total_pesanan }}</td>
                            <td class="flex">
                                <div class="w-1/2">
                                    @include('component.edit-pesanan')
                                </div>
                                <div class="w-1/2">
                                    @include('component.btn-hapus')
                                </div>
                            </td>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <!-- Dashboard field end -->
        </div>
        <!-- Main Dashboard end -->
    </div>
@endsection
