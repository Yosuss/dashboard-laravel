@extends('template.layout')
@section('konten')
    <div class="bg-gray-100 dashboard flex capitalize">
        <!-- Dashboard Menu -->
        <div class="bg-gray-100 w-2/12 h-screen items-center justify-center text-center">
            <div class="my-10 mx-6 mt-14 font-bold text-2xl">logo</div>
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
                        href="../index.html">logout</a></button>
            </div>
        </div>
        <!-- Dashboard Menu end -->

        <!-- Main Dashboard -->
        <div class="main-dashboard w-10/12 bg-white rounded-3xl">

            <!-- Navbar -->
            <div class="navbar grid grid-cols-2 m-6 gap-2">
                <div class="title">
                    <h1 class="text-2xl font-bold">restoran</h1>
                    <h3>Lorem, ipsum dolor.</h3>
                </div>
                <div class="search grid grid-cols-3 gap-2 items-center">
                    <input type="text" id="search" placeholder="search"
                        class="text-left px-3 pb-1 rounded-lg bg-gray-100">
                    <h1>logo</h1>
                </div>
            </div>
            <!-- Navbar end -->

            <!-- Dashboard field -->
            <div class="tambah mx-4 my-2">
                <button class="bg-green-400 hover:bg-green-700 shadow font-bold text-white px-4 py-1 rounded-lg"><a
                        href="./tambah/tambah.html">tambah</a></button>
            </div>
            <form action="" class="data-pesanan text-center border-2 items-center gap-2 mx-4 p-2 bg-white">
                <div id="nav-data" class="nav-data grid grid-cols-5 gap-2 mb-2">
                    <div class="font-bold border-2 py-1">id_pesanan</div>
                    <div class="font-bold border-2 py-1">tanggal pesanan</div>
                    <div class="font-bold border-2 py-1">total pesanan</div>
                    <div class="font-bold border-2 py-1">edit</div>
                    <div class="font-bold border-2 py-1">hapus</div>
                </div>

                @foreach ($pesanan as $item)
                    <div id="data" class="data grid grid-cols-5 gap-2 mb-2">
                        <div class="border-2">{{ $item->id_pesanan }}</div>
                        <div class="border-2">{{ $item->tanggal_pesanan }}</div>
                        <div class="border-2">{{ $item->total_pesanan }}</div>
                        <a href=""
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold shadow px-3 py-1 rounded-lg text-center">
                            Edit
                        </a>
                        <form action="{{ route('data_pesanan.hapus', $item->id_pesanan) }}" method="POST"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white font-bold shadow px-3 py-1 rounded-lg text-center">
                                Hapus Pesanan
                            </button>
                        </form>
                    </div>
                @endforeach
            </form>
            <!-- Dashboard field end -->
        </div>
        <!-- Main Dashboard end -->
    </div>
@endsection
