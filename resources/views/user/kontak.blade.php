@extends('user.layouts.master')

@section('title', 'Kontak Kami')

@section('content')

<h2 class="fw-bold mb-4">Kontak Kami</h2>

<div class="card card-custom p-4">

    <form>
        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Masukkan nama Anda">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control" placeholder="Masukkan email">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Pesan</label>
            <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda"></textarea>
        </div>

        <button class="btn btn-primary w-100">Kirim Pesan</button>
    </form>

    <hr class="my-4">

    <h5 class="fw-bold">Informasi Kontak</h5>
    <p><strong>Email:</strong> info@mywebsite.com</p>
    <p><strong>Telepon:</strong> +62 812 3456 7890</p>
    <p><strong>Alamat:</strong> Jl. Merdeka No. 123, Jakarta</p>

</div>

@endsection
