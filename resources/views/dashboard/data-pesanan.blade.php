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
            <!-- Tombol untuk memunculkan modal -->
            <div class="tambah mx-4 my-2">
                <button id="openModal-tambah"
                    class="bg-green-400 hover:bg-green-700 shadow font-bold text-white px-4 py-1 rounded-lg">
                    Tambah
                </button>
            </div>
            <!-- Modal -->
            <div id="tambahModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <div class="flex items-center justify-center min-h-screen">
                    <!-- Background overlay -->
                    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>
                    <!-- Modal content -->
                    <div
                        class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                        <div class="bg-white p-6 xl justify-center">
                            <h2 class="font-bold text-3xl mb-4">Tambah Data</h2>
                            <!-- Form dalam modal -->
                            <form action="{{ route('data-pesanan.tambah') }}" method="POST" class="">
                                @csrf
                                <div class="mb-4">
                                    <label for="tanggal_pesanan" class="block text-xl font-medium text-gray-700">Tanggal
                                        Pesanan</label>
                                    <input type="date" name="tanggal_pesanan" id="tanggal_pesanan"
                                        class="mt-1 block w-full py-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="total_pesanan" class="block text-xl font-medium text-gray-700">Total
                                        Pesanan</label>
                                    <input type="number" name="total_pesanan" id="total_pesanan"
                                        class="mt-1 block w-full py-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="flex justify-end">
                                    <button type="button" id="closeModal-tambah"
                                        class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg mr-2">
                                        Close
                                    </button>
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="form p-4">
                <table action="" class="data-pesanan text-center border-2 w-full">
                    <thead id="nav-data" class="nav-data">
                        <th class="font-bold border-2 py-1">no</th>
                        <th class="font-bold border-2 py-1">id_pesanan</th>
                        <th class="font-bold border-2 py-1">tanggal pesanan</th>
                        <th class="font-bold border-2 py-1">total pesanan</th>
                        <th colspan="2" class="font-bold border-2 py-1">Aksi</th>
                    </thead>

                    @foreach ($pesanan as $item)
                        <tbody id="data" class="data">
                            <td class="border-2">{{ $loop->iteration }}</td>
                            <td class="border-2">{{ $item->id_pesanan }}</td>
                            <td class="border-2">{{ $item->tanggal_pesanan }}</td>
                            <td class="border-2">{{ $item->total_pesanan }}</td>
                            <td class="flex">
                                <div class="w-1/2">
                                    <form action="{{ route('data-pesanan.edit',$item->id_pesanan) }}">
                                        <button id="openModal-edit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-1 rounded-lg font-semibold w-full">
                                            edit
                                        </button>
                                    </form>

                                    <!-- Modal -->
                                    <div id="editModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                                        <div class="flex items-center justify-center min-h-screen">
                                            <!-- Background overlay -->
                                            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                            </div>
                                            <!-- Modal content -->
                                            <div
                                                class="bg-white rounded-lg text-start overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                                                <div class="bg-white p-6 xl justify-center">
                                                    <h2 class="font-bold text-3xl mb-4">edit Data</h2>
                                                    <!-- Form dalam modal -->
                                                    <form action="{{ route('data-pesanan.update', $item->id_pesanan) }}" method="POST"
                                                        class="">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-4">
                                                            <label for="tanggal_pesanan"
                                                                class="block text-xl font-medium text-gray-700">Tanggal
                                                                Pesanan</label>
                                                            <input type="date" name="tanggal_pesanan"
                                                                id="tanggal_pesanan"
                                                                class="mt-1 block w-full py-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                                                                required value="{{$item->tanggal_pesanan}}">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="total_pesanan"
                                                                class="block text-xl font-medium text-gray-700">Total
                                                                Pesanan</label>
                                                            <input type="number" name="total_pesanan" id="total_pesanan"
                                                                class="mt-1 block w-full py-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                                required value="{{$item->total_pesanan}}">
                                                        </div>
                                                        <div class="flex justify-end">
                                                            <button type="button" id="closeModal-edit"
                                                                class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg mr-2">
                                                                Close
                                                            </button>
                                                            <button type="submit"
                                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                                                Simpan
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="w-1/2">
                                    <form action="{{ route('data_pesanan.hapus', $item->id_pesanan) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-lg font-semibold w-full">
                                            Hapus
                                        </button>
                                    </form>
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

    <script>
        const tambahModal = document.getElementById("tambahModal");
        const openModal_tambah = document.getElementById("openModal-tambah");
        const closeModal_tambah = document.getElementById("closeModal-tambah");
        openModal_tambah.addEventListener("click", function() {
            tambahModal.classList.remove("hidden");
        });
        closeModal_tambah.addEventListener("click", function() {
            tambahModal.classList.add("hidden");
        });
        window.onclick = function(event) {
            if (event.target == modal) {
                tambahModal.classList.add("hidden");
            }
        };

        const editModal = document.getElementById("editModal");
        const openModal_edit = document.getElementById("openModal-edit");
        const closeModal_edit = document.getElementById("closeModal-edit");
        openModal_edit.addEventListener("click", function() {
            editModal.classList.remove("hidden");
        });
        closeModal_edit.addEventListener("click", function() {
            editModal.classList.add("hidden");
        });
        window.onclick = function(event) {
            if (event.target == modal) {
                editModal.classList.add("hidden");
            }
        };
    </script>
@endsection