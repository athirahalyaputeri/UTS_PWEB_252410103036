@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<div class="login-box">
    <h1>Pengelolaan Buku</h1>

    <p>Daftar Buku Perpustakaan:</p>

    @foreach ($daftarBuku as $buku)
        <div style="padding: 10px; border-bottom: 1px solid #ddd;">
            <strong>{{ $buku['judul'] }}</strong>
            <p>Penulis: {{ $buku['penulis'] }}</p>
        </div>
    @endforeach
</div>
@endsection