
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Buku</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->penulis }}</td>
                    <td>{{ $book->tahun_terbit }}</td>
                    <td>{{ $book->stok }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data buku.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
