@extends('layout')

@section('content')
<table class="mx-auto mt-32">
    <thead>
        <tr>
            <th class="border px-4">Nama</th>
            <th class="border px-4">Nama Asli</th>
            <th class="border px-4">Gender</th>
            <th class="border px-4">Tanggal Lahir</th>
            <th class="border px-4">Foto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($authors as $author)
            <tr>
                <td class="border px-4 text-center">{{ $author['name'] }}</td>
                <td class="border px-4 text-center">{{ $author['real_name'] }}</td>
                <td class="border px-4 text-center">{{ $author['gender'] }}</td>
                <td class="border px-4 text-center">{{ $author['birthdate'] }}</td>
                <td class="border px-4 text-center">{{ $author['image'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection