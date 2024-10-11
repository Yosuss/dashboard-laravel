@extends('template.layout')
@section('konten')
    <div class="login w-full">
        <div class="grid grid-cols-2 h-screen">
            <div class="w-full max-lg:hidden">
                <img src="{{ asset('aset/login.png') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col justify-center items-center">
                <div class="border-2 border-black gap-2 p-5 ">
                    <h1 class="text-3xl font-semibold">login</h1>
                    <form action="{{ route('login') }}" class="">
                        <label class="block text-sm font-medium text-gray-700 border-2 border-black py-2">username</label>
                        <input type="text" name="" id="">
                        <label class="block text-sm font-medium text-gray-700 border-2 border-black py-2">password</label>
                        <input type="password" name="" id="">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
