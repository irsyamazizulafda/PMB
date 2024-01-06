@extends('layouts.mainLayout')

@section('title', 'Dashboard User')

@section('content')

<div class="container mt-4">
    <h1>Selamat Datang di Dashboard, {{ auth()->user()->name }}!</h1>

    <p>Anda telah berhasil masuk ke dashboard pengguna. Di sini, Anda dapat mengakses berbagai fitur dan informasi terkait akun Anda.</p>

    <h3>Fitur Utama:</h3>
    <ul>
        <li><strong>Profil:</strong> Lihat dan perbarui informasi profil Anda.</li>
        <li><strong>Pendaftaran PPDB : </strong> Daftar sebagai Murid baru</li>
        <li><strong>Histori Pendaftaran:</strong> Pantau histori pendaftaran dan statusnya.</li>

    </ul>
    <div class="button-container-icon">
        <a href="{{ route('formulir.index') }}" class="btn btn-primary custom-button-home" type="submit">Isi Pendaftaran</a>
    </div>

    <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi tim dukungan kami.</p>
</div>

@endsection
