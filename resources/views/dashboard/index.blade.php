```blade
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard Perpustakaan</h1>

    <p>Selamat datang di Sistem Informasi Perpustakaan.</p>

    <div class="dashboard-cards">
        <div class="card">
            <h3>Total Buku</h3>
            <p>5</p>
        </div>

        <div class="card">
            <h3>Total Kategori</h3>
            <p>5</p>
        </div>

        <div class="card">
            <h3>Total Anggota</h3>
            <p>5</p>
        </div>
    </div>
</div>
@endsection
