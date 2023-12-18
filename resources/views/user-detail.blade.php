@extends('layouts.mainLayout')

@section('title', 'Detail User')

@section('content')

<h1>Detail User</h1>

<div class="mt-5 d-flex justify-content-end">
    @if ($user->status == 'inactive')
    <a href="/user-approve/{{ $user->slug }}" class="btn btn-success">Approve User</a>
    @endif
</div>

@if (session('status'))
<div class="alert alert-success mt-5">
    {{ session('status') }}
</div>
@endif

<div class="row">
    <form action="/update-user/{{ $user->slug }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}"
                required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="5" required>{{ $user->address }}</textarea>
        </div>

        <!-- Add more form fields as needed -->

        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
    <br>
    
</div>
</div>
@endsection