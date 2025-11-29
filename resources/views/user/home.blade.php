@extends('user.layouts.master')

@section('title', 'Home')

@section('content')

<div class="hero text-center rounded">
    <h1 class="fw-bold">Selamat Datang di Website Kami</h1>
    <p class="lead mt-2">Tempat informasi, layanan, dan profil terbaik.</p>
</div>

<div class="row mt-5">
    <div class="col-md-4">
        <div class="card p-4 card-custom">
            <h4 class="fw-bold">Tentang Kami</h4>
            <p>Kami menyediakan layanan profesional dan terpercaya.</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4 card-custom">
            <h4 class="fw-bold">Layanan Utama</h4>
            <p>Solusi terbaik untuk kebutuhan digital dan teknologi Anda.</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4 card-custom">
            <h4 class="fw-bold">Hubungi Kami</h4>
            <p>Kami siap membantu kapan saja. Silakan kontak kami.</p>
        </div>
    </div>
</div>

@endsection
