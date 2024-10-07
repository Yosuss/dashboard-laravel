                <!-- Button to Open Modal -->
                <button type="button"
                    class="bg-green-400 hover:bg-green-700 shadow font-bold text-white px-4 py-1 rounded-lg"
                    onclick="openModal()">Tambah Data</button>

                <!-- Modal Background -->
                <div id="modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
                    <!-- Modal Content -->
                    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                        <h2 class="text-lg font-semibold mb-4">Tambah Data</h2>

                        <!-- Form -->
                        <form>
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" id="name"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="mb-4">
                                <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                                <textarea id="message"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            </div>

                            <!-- Modal Buttons -->
                            <div class="flex justify-end space-x-2">
                                <button type="button"  class="bg-gray-500 text-white px-4 py-2 rounded">Batal</button>
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
<script>
            function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

</script>