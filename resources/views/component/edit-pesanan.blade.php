<form action="{{ route('data-pesanan.edit', $item->id_pesanan) }}">
    <button id="openModal-edit"
        class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-1 rounded-lg font-semibold w-full">
        {{-- edit --}}
        <i class="bi bi-pencil-fill"></i>
    </button>
</form>

<!-- Modal -->
{{-- <div id="editModal{{$item->id_pesanan}}" class="fixed z-10 inset-0 overflow-y-auto hidden">
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
</div> --}}
