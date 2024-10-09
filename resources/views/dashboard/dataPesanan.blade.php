@extends('template.layout')
@section('konten')
<div class="container flex bg-gray-100">
    <div class="sidebar py-20 text-2xl bg-gray-100 w-2/12 h-screen items-center justify-center text-center">
        <div class="logo">
            <h1>logo</h1>
        </div>
        <div class="field">
            <h1 class="">data pesanan</h1>
        </div>
    </div>

    <div class="main text-2xl capitalize w-10/12">
        <div class="navbar">
            <h1 class="">restoran</h1>
        </div>
        <div class="field">
            <table class="border-8">
                <thead>
                    <th>id_pesanan</th>
                    <th>tanggal_pesanan</th>
                    <th>total_pesanan</th>
                    <th>aksi</th>
                    <th>aksi</th>
                </thead>
            </table>
        </div>

    </div>
</div>
@endsection