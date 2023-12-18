@extends('layouts.mainLayout')

@section('title', 'Detail User')

@section('content')

    <h1>Detail User</h1>

    @if (session('status'))
        <div class="alert alert-success mt-5">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <form action="{{ route('formulir.store') }}" method="post">
            @csrf
            @method('PUT')

            <!-- Personal Information -->
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Full Name</label>
                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $formulir->nama_lengkap) }}" required>
                @error('nama_lengkap')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="alamat_ktp" class="form-label">KTP Address</label>
                <input type="text" class="form-control @error('alamat_ktp') is-invalid @enderror" id="alamat_ktp" name="alamat_ktp" value="{{ old('alamat_ktp', $formulir->alamat_ktp) }}" required>
                @error('alamat_ktp')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Address Information -->
            <div class="mb-3">
                <label for="alamat_lengkap" class="form-label">Complete Address</label>
                <input type="text" class="form-control @error('alamat_lengkap') is-invalid @enderror" id="alamat_lengkap" name="alamat_lengkap" value="{{ old('alamat_lengkap', $formulir->alamat_lengkap) }}" required>
                @error('alamat_lengkap')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kecamatan" class="form-label">District</label>
                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" value="{{ old('kecamatan', $formulir->kecamatan) }}" required>
                @error('kecamatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kabupaten" class="form-label">Regency</label>
                <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten" name="kabupaten" value="{{ old('kabupaten', $formulir->kabupaten) }}" required>
                @error('kabupaten')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="provinsi" class="form-label">Province</label>
                <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi" value="{{ old('provinsi', $formulir->provinsi) }}" required>
                @error('provinsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Contact Information -->
            <div class="mb-3">
                <label for="no_telepon" class="form-label">Telephone Number</label>
                <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" value="{{ old('no_telepon', $formulir->no_telepon) }}" required>
                @error('no_telepon')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="no_hp" class="form-label">Mobile Number</label>
                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp', $formulir->no_hp) }}" required>
                @error('no_hp')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $formulir->email) }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Additional Information -->
            <div class="mb-3">
                <label for="kewarganegaraan" class="form-label">Nationality</label>
                <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" id="kewarganegaraan" name="kewarganegaraan" value="{{ old('kewarganegaraan', $formulir->kewarganegaraan) }}" required>
                @error('kewarganegaraan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Date of Birth</label>
                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $formulir->tanggal_lahir) }}" required>
                @error('tanggal_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Place of Birth</label>
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $formulir->tempat_lahir) }}" required>
                @error('tempat_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kabupaten_lahir" class="form-label">Birth Regency</label>
                <input type="text" class="form-control @error('kabupaten_lahir') is-invalid @enderror" id="kabupaten_lahir" name="kabupaten_lahir" value="{{ old('kabupaten_lahir', $formulir->kabupaten_lahir) }}" required>
                @error('kabupaten_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="provinsi_lahir" class="form-label">Birth Province</label>
                <input type="text" class="form-control @error('provinsi_lahir') is-invalid @enderror" id="provinsi_lahir" name="provinsi_lahir" value="{{ old('provinsi_lahir', $formulir->provinsi_lahir) }}" required>
                @error('provinsi_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Additional Information -->
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Gender</label>
                <select class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="male" {{ old('jenis_kelamin', $formulir->jenis_kelamin) == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('jenis_kelamin', $formulir->jenis_kelamin) == 'female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('jenis_kelamin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status_menikah" class="form-label">Marital Status</label>
                <select class="form-select @error('status_menikah') is-invalid @enderror" id="status_menikah" name="status_menikah" required>
                    <option value="single" {{ old('status_menikah', $formulir->status_menikah) == 'single' ? 'selected' : '' }}>Single</option>
                    <option value="married" {{ old('status_menikah', $formulir->status_menikah) == 'married' ? 'selected' : '' }}>Married</option>
                </select>
                @error('status_menikah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="agama" class="form-label">Religion</label>
                <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama', $formulir->agama) }}" required>
                @error('agama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Add more fields as needed -->

            <button type="submit" class="btn btn-primary">Simpan Formulir</button>
        </form>
        <br>
    </div>
</div>

@endsection
