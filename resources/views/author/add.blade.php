@extends('layout')

@section('content')
<section class="mt-32">
    <div class="w-[800px] mx-auto p-4 border">
        <h1 class="text-4xl mb-10">Tambah Author</h1>
        <form action="/author/add" method="post" class="flex flex-col gap-4" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center">
                <label for="name" class="block w-[100px] mr-8">Nama</label>
                <input type="text" id="name" name="name" class="px-1 border border-slate-500">
            </div>
            <div class="flex items-center">
                <label for="real_name" class="block w-[100px] mr-8">Nama Asli</label>
                <input type="text" id="real_name" name="real_name" class="px-1 border border-slate-500">
            </div>
            <div class="flex items-center">
                <p for="" class="w-[100px] mr-8">Gender</p>
                <input type="radio" name="gender" value="M" checked class="mr-1">
                <label for="html" class="mr-8">Laki-laki</label><br>
                <input type="radio" name="gender" value="F" class="mr-1">
                <label for="html">Perempuan</label><br>
            </div>
            <div class="flex items-center">
                <label for="birthdate" class="block w-[100px] mr-8">Tanggal Lahir</label>
                <input type="date" id="birthdate" name="birthdate" class="px-1 border border-slate-500">
            </div>
            <div class="flex items-center">
                <label for="image" class="block w-[100px] mr-8">Foto</label>
                <input type="file" id="image" name="image" class="px-1 border border-slate-500">
            </div>
            <button type="submit" class="w-fit px-2 py-1 bg-green-600 text-white rounded-md">Submit</button>
        </form>
        <a href="/author" class="text-blue-500 underline">Back</a>
    </div>
</section>
@endsection