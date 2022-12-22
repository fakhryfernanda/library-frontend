@extends('layout')

@section('content')
<div class="w-fit mx-auto mt-32 ">
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
        <span>{{ $author["image"] }}</span>
    </p>
</div>
@endsection