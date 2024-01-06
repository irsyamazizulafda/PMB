@extends('layouts.mainLayout')

@section('title', 'Dashboard')

@section('content')
@php
    use Illuminate\Support\Facades\Auth;
@endphp

<h1 class="mb-5">Welcome, {{ Auth::user()->username }}</h1>


    <div class="col-lg-4">
        <div class="card-data user">
            <div class="row">
                <div class="col-6 d-flex justify-content-center"><i class="bi bi-people"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="card-desc">Users</div>
                    <div class="card-count">{{ $user_count }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection