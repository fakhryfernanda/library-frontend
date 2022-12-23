@extends('layout')

@section('content')
<div class="w-fit mx-auto mt-32 ">
    <a href="/author/edit/{{ $author['id'] }}" class="text-blue-500 underline">Edit</a>
    <div class="">
        <p>
            <span>Nama: </span>
            <span>{{ $author["name"] }}</span>
        </p>
        <p>
            <span>Nama Asli: </span>
            <span>{{ $author["real_name"] }}</span>
        </p>
        <p>
            <span>Gender: </span>
            <span>{{ $author["gender"] }}</span>
        </p>
        <p>
            <span>Tanggal Lahir: </span>
            <span>{{ $author["birthdate"] }}</span>
        </p>
        <p>
            <span>Foto: </span>
            <img src="{{ Storage::url($author['image']) }}" alt="image" class="w-[200px]">
        </p>
    </div>
    <a href="/author" class="text-blue-500 underline">Back</a>
</div>
@endsection