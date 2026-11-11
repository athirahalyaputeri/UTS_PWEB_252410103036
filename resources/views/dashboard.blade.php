@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="login-box">
    <h1>Dashboard BookSpace</h1>

    <p>Selamat datang, {{ $username }}!</p>
    <p>Selamat datang di sistem pengelolaan perpustakaan BookSpace.</p>
</div>
@endsection