<form action="{{ route('data_pesanan.hapus', $item->id_pesanan) }}" method="POST"
    onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?');">
    @csrf
    @method('DELETE')
    <button type="submit"
        class="bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-lg font-semibold w-full">
        {{-- Hapus --}}
        <i class="bi bi-trash-fill"></i>
    </button>
</form>
