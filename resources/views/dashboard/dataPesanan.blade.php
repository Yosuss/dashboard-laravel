@extends('template.layout')
@section('konten')
        <!-- Sidebar + Main Content -->
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <div class="bg-blue-900 text-black w-2/12 justify-center items-center p-5 space-y-6 min-h-screen">
                <h1 class="text-2xl font-bold">Dashboard</h1>
                <div>
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700">Home</a>
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700">Profile</a>
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700">Settings</a>
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700">Logout</a>
                </div>
            </div>
    
            <!-- Main content -->
            <div class="flex-1 flex flex-col w-10/1\">
                <!-- Navbar -->
                <div class="flex justify-between items-center bg-black p-4 shadow-md">
                    <h2 class="text-2xl font-bold">Dashboard Overview</h2>
                    <div class="space-x-4">
                        <button class="bg-blue-600 text-black py-2 px-4 rounded hover:bg-blue-500">Button 1</button>
                        <button class="bg-blue-600 text-black py-2 px-4 rounded hover:bg-blue-500">Button 2</button>
                    </div>
                </div>
    
                <!-- Table (Main Content) -->
                <div class="flex-1 overflow-auto p-6">
                    <div class="bg-black p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Data Table</h3>
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">ID</th>
                                    <th class="py-3 px-6 text-left">Name</th>
                                    <th class="py-3 px-6 text-left">Email</th>
                                    <th class="py-3 px-6 text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">1</td>
                                    <td class="py-3 px-6 text-left">John Doe</td>
                                    <td class="py-3 px-6 text-left">john@example.com</td>
                                    <td class="py-3 px-6 text-center">
                                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Active</span>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">2</td>
                                    <td class="py-3 px-6 text-left">Jane Doe</td>
                                    <td class="py-3 px-6 text-left">jane@example.com</td>
                                    <td class="py-3 px-6 text-center">
                                        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Inactive</span>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
@endsection