@extends('layouts.app')
@section('title', 'profil')
@section('content')
    <div class="container py-5">
        <div class="profil-card p-5 mx-auto text-center" style="margin: 12rem 0;">
            <div class="profil-avatar d-flex justify-content-center align-items-center mx-auto mb-3">
                {{ strtoupper(substr($username, 0, 1)) }}
            </div>

            <h2 class="mb-1">{{ $username }}</h2>
            <p class="mb-4">Pelanggan Warung Kuning</p>

            <div class="d-flex justify-content-center gap-2 flex-wrap">
                <a href="/Menu?username={{ $username }}" class="btn" style="background-color: #F5C542; color: #493323;">Lihat Menu</a>
                <a href="/" class="btn btn-outline-secondary">Keluar</a>
            </div>
        </div>
    </div>
@endsection

