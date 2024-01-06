@extends('layouts.mainLayout')

@section('title', 'Detail User')
@php
    use Illuminate\Support\Facades\Auth;
@endphp
@section('content')
    <a href="{{ route('dashboard.user') }}" class="btn btn-primary">Back</a>
    <nav class="mt-3 mb-3 card p-5" style="--bs-breadcrumb-divider:
        url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'
        width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard User</a></li>
          <li class="breadcrumb-item active" aria-current="page">Formulir</li>
        </ol>
        <h1>Formulir User</h1>
      </nav>


    @if (session('status'))
        <div class="alert alert-success mt-5">
            {{ session('status') }}
        </div>
    @endif


        <div class="card">
            <div class="card-header">
               <b>Data KTP Pribadi</b>
              </div>




                <form action="{{ route('formulir.store') }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" id="user_id">
                    <!-- Personal Information -->
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Masukkan Nama Lengkap Anda : </label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                        placeholder="Masukkan Nama Lengkap anda ex : 'Aziz Afda'"
                        id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required>
                        @error('nama_lengkap')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">Masukkan NIK Anda : </label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror"
                        placeholder="Masukkan NIK anda ex : '123'"
                        id="nik" name="nik" value="{{ old('nik') }}" required>
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat_ktp" class="form-label">Alamat KTP Anda :</label>
                        <input type="text" class="form-control @error('alamat_ktp') is-invalid @enderror"
                        placeholder="Masukkan Alamat Lengkap anda ex : 'Jl.Maulanan Hasanudin Gg.Sukapura No.79 "
                        id="alamat_ktp" name="alamat_ktp" value="{{ old('alamat_ktp') }}" required>
                        @error('alamat_ktp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Address Information -->
                    <div class="mb-3">
                        <label for="alamat_lengkap" class="form-label">Alamat Lengkap Anda :</label>
                        <textarea class="form-control @error('alamat_lengkap') is-invalid @enderror"
                        placeholder="Masukkan Alamat Lengkap anda ex : 'Jl.Maulanan Hasanudin Gg.Sukapura No.79 RT.04/RW.008'"
                        id="alamat_lengkap" name="alamat_lengkap" rows="3" required>{{ old('alamat_lengkap') }}</textarea>
                        @error('alamat_lengkap')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>



                        <div class="form-group">
                            <label for="provinsi">Provinsi:</label>
                            <select name="provinsi" id="provinsi" class="form-control">
                                <option value="">===Choose==</option>
                                @forelse ($provinsi as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>

                        <!-- Kota -->
                        <div class="form-group">
                            <label for="kabupaten">Kabupaten atau Kota:</label>
                            <select name="kabupaten" id="kabupaten_kota" class="form-control">
                                <option value="">===Choose==</option>
                                @forelse ($kabupaten_kota as $item)
                                    <option class="kota-option" data-provinsi="{{ $item->id_provinsi }}" value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>

                </div>



        </div>
        <div class="card mb-3 mt-3">
            <div class="card-header">
                <b>Data Pribadi Saat ini</b>
            </div>
            <div class="card-body">
                    <!-- Contact Information -->
                    <div class="mb-3">
                        <label for="no_telepon" class="form-label">Nomor Telepon Rumah</label>
                        <input type="text" class="form-control @error('no_telepon') is-invalid @enderror"
                        placeholder=" ex : '02131550'"
                        id="no_telepon" name="no_telepon" value="{{ old('no_telepon') }}" required>
                        @error('no_telepon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="no_hp" class="form-label"> Nomor Pribadi</label>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                        placeholder=" ex : '08131550'"
                        id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required>
                        @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder=" ex : 'aziz@gmail.com'"
                        id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kewarganegaraan" class="form-label">Nationality</label>
                        <select class="form-control @error('kewarganegaraan') is-invalid @enderror" id="kewarganegaraan" name="kewarganegaraan" required>
                            <option value="" disabled selected>Select Nationality</option>
                            <option value="Indonesia" {{ old('kewarganegaraan') == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                            <option value="Palestina" {{ old('kewarganegaraan') == 'Palestina' ? 'selected' : '' }}>Palestina</option>
                            <option value="Singapura" {{ old('kewarganegaraan') == 'Singapura' ? 'selected' : '' }}>Singapura</option>
                            <!-- Tambahkan opsi sesuai kebutuhan -->
                        </select>
                        @error('kewarganegaraan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            </div>
        </div>

    </div>
    <div class="card">
        <div class="card-header">
            <b>Data TTL (Tempat Tanggal Lahir)</b>
        </div>
        <div class="card-body">



                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir :</label>
                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                    @error('tanggal_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir :</label>
                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                    @error('tempat_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


            <div class="mb-3">
                {{-- <label for="provinsi_lahir" class="form-label">Provinsi Lahir</label>
                <input type="text" class="form-control @error('provinsi_lahir') is-invalid @enderror" id="provinsi_lahir" name="provinsi_lahir" value="{{ old('provinsi_lahir') }}" required>
                @error('provinsi_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
                <label for="provinsi_lahir">Provinsi lahir:</label>
                <select name="provinsi_lahir" id="provinsi_lahir" class="form-control">
                    <option value="">===Choose==</option>
                    @forelse ($provinsi as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @empty
                    @endforelse
                </select>
            </div>
                <div class="mb-3">
                    {{-- <label for="kabupaten_lahir" class="form-label">Kabupaten Lahir :</label>
                    <input type="text" class="form-control @error('kabupaten_lahir') is-invalid @enderror" id="kabupaten_lahir" name="kabupaten_lahir" value="{{ old('kabupaten_lahir') }}" required>
                    @error('kabupaten_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror --}}
                    <label for="kabupaten_lahir">Kabupaten atau Kota:</label>
                    <select name="kabupaten_lahir" id="kabupaten_kota_lahir" class="form-control">
                        <option value="">===Choose==</option>
                        @forelse ($kabupaten_kota as $item)
                            <option class="kota-option-lahir" data-provinsi="{{ $item->id_provinsi }}" value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>



                <!-- Additional Information -->
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin :</label>
                    <select class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="male" {{ old('jenis_kelamin') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('jenis_kelamin') == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('jenis_kelamin')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    </div>
    <div class="card mb-3 mt-3">
        <div class="card-header">
            <b>Status dan Kepercayaan</b>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="status_menikah" class="form-label">Status Nikah :</label>
                <select class="form-select @error('status_menikah') is-invalid @enderror" id="status_menikah" name="status_menikah" required>
                    <option value="single" {{ old('status_menikah') == 'single' ? 'selected' : '' }}>Single</option>
                    <option value="married" {{ old('status_menikah') == 'married' ? 'selected' : '' }}>Married</option>
                </select>
                @error('status_menikah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="agama" class="form-label">Religion :</label>
                <select class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" required>
                    <option value="" disabled selected>Select Religion</option>
                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                    <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    <!-- Tambahkan opsi sesuai kebutuhan -->
                </select>
                @error('agama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>


                <!-- Add more fields as needed -->

                <button type="submit" class="btn btn-primary">Simpan Formulir</button>
            </form>

        <br>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
      $(document).ready(function(){
        $('#provinsi').change(function(){
            var selectedProvinsi = $(this).val();


            $('#kabupaten_kota option').hide();
            $('.kota-option[data-provinsi="' + selectedProvinsi + '"]').show();
        });
    });
    $(document).ready(function(){
        $('#provinsi_lahir').change(function(){
            var selectedProvinsi = $(this).val();


            $('#kabupaten_kota_lahir option').hide();
            $('.kota-option-lahir[data-provinsi="' + selectedProvinsi + '"]').show();
        });
    });
    $(document).ready(function(){
        // Fungsi untuk memastikan nomor HP hanya berisi angka
        function isValidPhoneNumber(input) {
            var regex = /^[0-9]+$/;
            return regex.test(input);
        }

        // Event handler untuk input nomor HP
        $('#no_hp').on('input', function(){
            var inputValue = $(this).val();

            if (!isValidPhoneNumber(inputValue)) {
                // Jika nomor HP tidak valid, tampilkan pesan atau lakukan tindakan yang diinginkan
                alert('Isian Nomor HP Harus Berupa Angka');
                // Anda juga dapat menambahkan tindakan lain, seperti membersihkan nilai input atau menampilkan pesan di elemen HTML tertentu
            }
        });
    });

</script>
@endsection
