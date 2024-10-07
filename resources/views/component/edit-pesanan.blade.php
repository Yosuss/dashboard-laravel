                    <!-- Button to open modal -->
                    <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded" onclick="toggleModal()">Open
                        Modal</button>

                    <!-- Modal -->
                    <div id="modal"
                        class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
                        <div class="bg-white rounded-lg p-6 max-w-sm w-full">
                            <h2 class="text-xl font-bold mb-4">Modal Title</h2>
                            <p class="text-gray-700 mb-4">This is a simple modal using Tailwind CSS. You can add any
                                content
                                here.</p>
                            <div class="flex justify-end">
                                <button class="bg-red-500 text-white px-4 py-2 rounded"
                                    onclick="toggleModal()">Close</button>
                            </div>
                        </div>
                    </div>
                    <script>
                        function toggleModal() {
                            const modal = document.getElementById('modal');
                            modal.classList.toggle('hidden');
                        }
                    </script>
