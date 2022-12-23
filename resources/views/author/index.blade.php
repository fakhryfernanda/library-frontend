@extends('layout')

@section('content')
<div class="w-fit mx-auto mt-32">
    <a href="author/add" class="text-blue-500 underline">Tambah data</a>
    <table>
        <thead>
            <tr>
                <th class="py-1 border px-4">Nama</th>
                <th class="py-1 border px-4">Nama Asli</th>
                <th class="py-1 border px-4">Gender</th>
                <th class="py-1 border px-4">Tanggal Lahir</th>
                <th class="py-1 border px-4">Foto</th>
                <th class="py-1 border px-4"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td class="p-2 border px-4 text-center">{{ $author['name'] }}</td>
                    <td class="p-2 border px-4 text-center">{{ $author['real_name'] }}</td>
                    <td class="p-2 border px-4 text-center">{{ $author['gender'] }}</td>
                    <td class="p-2 border px-4 text-center">{{ $author['birthdate'] }}</td>
                    <td class="p-2 border px-4 text-center">
                        <img src="{{ Storage::url($author['image']) }}" alt="image" class="w-[200px]">
                    </td>
                    <td class="p-2 border px-4 text-center text-blue-500 underline">
                        <a href="author/detail/{{ $author['id'] }}" class="mr-4">Detail</a>
                        <form action="author/delete/{{ $author['id'] }}" method="post" class="inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection