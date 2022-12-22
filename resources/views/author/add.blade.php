@extends('layout')

@section('content')
<section class="mt-32">
    <div class="w-[800px] mx-auto p-4 border">
        <h1 class="text-4xl mb-10">Tambah Author</h1>
        <form action="" class="flex flex-col gap-4">
            <div class="flex items-center">
                <label for="" class="block w-[100px] mr-8">Nama</label>
                <input type="text" id="" name="" class="px-1 border border-slate-500">
            </div>
            <div class="flex items-center">
                <label for="" class="block w-[100px] mr-8">Nama Asli</label>
                <input type="text" id="" name="" class="px-1 border border-slate-500">
            </div>
            <div class="flex items-center">
                <p for="" class="w-[100px] mr-8">Gender</p>
                <input type="radio" id="" name="" value="" class="mr-1">
                <label for="html" class="mr-8">Laki-laki</label><br>
                <input type="radio" id="" name="" value="" class="mr-1">
                <label for="html">Perempuan</label><br>
            </div>
            <div class="flex items-center">
                <label for="" class="block w-[100px] mr-8">Tanggal Lahir</label>
                <input type="date" id="" name="" class="px-1 border border-slate-500">
            </div>
            <div class="flex items-center">
                <label for="" class="block w-[100px] mr-8">Foto</label>
                <input type="file" id="" name="" class="border border-slate-500">
            </div>
        </form>
    </div>
</section>
@endsection