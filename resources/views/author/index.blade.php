@extends('layout')

@section('content')
<div class="w-fit mx-auto mt-32">
    <a href="author/add" class="text-blue-500 underline">Tambah data</a>
    <table>
        <thead>
            <tr>
                <th class="border px-4">Nama</th>
                <th class="border px-4">Nama Asli</th>
                <th class="border px-4">Gender</th>
                <th class="border px-4">Tanggal Lahir</th>
                <th class="border px-4">Foto</th>
                <th class="border px-4"></th>
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
                    <td class="border px-4 text-center text-blue-500 underline">
                        <a href="author/detail/{{ $author['id'] }}">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection