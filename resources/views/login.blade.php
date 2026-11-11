@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="login-box">
    <h1>Selamat Datang di BookSpace</h1>
    <p>Sistem Informasi Pengelolaan Perpustakaan</p>

    <form action="{{ route('login.process') }}" method="POST">
        @csrf

        <label for="username">Username</label>

        <input
            type="text"
            id="username"
            name="username"
            placeholder="Masukkan username"
            value="{{ old('username') }}"
            required
        >

        @error('username')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <button type="submit">Masuk</button>
    </form>
</div>

@endsection