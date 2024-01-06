use Illuminate\Support\Facades\Session;

@extends('layouts.mainLayout')

@section('title', 'Registered User')

@section('content')

<h1>Histori Pendaftaran Anda</h1>

@if (session('status'))
<div class="alert alert-success mt-5">
    {{ session('status') }}
</div>
@if (Session::get('message'))
<div class="alert alert-warning" role="alert">
    {{ Session::get('message') }}
</div>
@endif
@endif

<div class="mt-5 d-flex justify-content-end">
    <a href=" {{ route('formulir.index') }}" class="btn btn-primary me-4">Tambah Formulir</a>
</div>

<div class="my-5">
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th class="col-sm-1">No.</th>
                <th class="col-sm-5">Username</th>
                <th class="col-sm-3">Negara</th>
                <th class="col-sm-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($history as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_lengkap }}</td>
                <td>
                    @if ($item->kewarganegaraan)
                    {{ $item->kewarganegaraan }}
                    @else
                    -
                    @endif
                </td>
                    <td>
                        <a href="{{ route('formulir.cetak_pdf', ['id' => $item->user_id]) }}" class="btn btn-primary me-2">Cetak</a>
                        <a href="{{ route('history.show', ['user_id' => $item->user_id]) }}) }}" class="btn btn-primary me-2">Detail</a>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
