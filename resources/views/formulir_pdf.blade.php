<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti PDF</title>
    <!-- Tambahkan style atau CSS yang diperlukan di sini -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        p {
            margin-bottom: 10px;
        }

        footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Bukti PDF</h1>

    <p>Nama Lengkap: {{ $formulir->nama_lengkap }}</p>
    <p>NIK: {{ $formulir->nik }}</p>
    <p>Alamat KTP: {{ $formulir->alamat_ktp }}</p>
    <p>Alamat Lengkap: {{ $formulir->alamat_lengkap }}</p>
    <p>No Telepon: {{ $formulir->no_telepon }}</p>
    <p>No HP: {{ $formulir->no_hp }}</p>
    <p>Email: {{ $formulir->email }}</p>
    <p>Kewarganegaraan: {{ $formulir->kewarganegaraan }}</p>
    <p>Tanggal Lahir: {{ $formulir->tanggal_lahir }}</p>
    <p>Tempat Lahir: {{ $formulir->tempat_lahir }}</p>
    <p>Provinsi Lahir: {{ $formulir->provinsi_lahir }}</p>
    <p>Kabupaten Lahir: {{ $formulir->kabupaten_lahir }}</p>
    <p>Jenis Kelamin: {{ $formulir->jenis_kelamin }}</p>
    <p>Status Menikah: {{ $formulir->status_menikah }}</p>
    <p>Agama: {{ $formulir->agama }}</p>
  
    <!-- Tambahkan elemen HTML atau struktur lainnya sesuai kebutuhan -->

    <!-- Tambahkan footer atau informasi lainnya -->
    <footer>
        <p>Terima kasih telah menggunakan layanan kami.</p>
    </footer>

    <!-- Tambahkan script atau JavaScript yang diperlukan di sini -->

</body>
</html>
