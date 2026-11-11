@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="login-box">
    <h1>Profile Pengguna</h1>

    <p>Username: {{ $username }}</p>
    <p>Nama Sistem: BookSpace</p>
    <p>Status: Pengguna</p>
</div>
@endsection