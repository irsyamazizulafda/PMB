<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/landingpage.css') }}">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 20px;
    }

    h2 {
        color: #333;
    }

    p {
        margin-bottom: 20px;
    }

    ul {
        list-style-type: square;
        margin-left: 20px;
    }

    .signature {
        margin-top: 40px;
    }
</style>
<body>
    <div class="common-style">
        <section id="navigasi-web" class="navigasi-web">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">PPDB<span style="color: rgba(102, 200, 255, 0.80);">.ID</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggler"
                        aria-controls="toggler" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="toggler">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#navigasi-web">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#service-web">SERVICE</a>
                            </li>
                        </ul>

                        @auth

                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-light custom-button">LOGOUT</button>
                            </form>
                        @else

                            <div class="button-container">
                                <a href="login" class="btn btn-outline-light custom-button">LOGIN</a>
                                <a href="register" class="btn btn-primary custom-button">REGISTER</a>
                            </div>
                        @endauth
                    </div>

                </div>
            </nav>
        </section>

        <section id="home-web" class="home-web">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="typography-tittle">
                            .
                        </h2>
                        <p class="typography-text">Welcome</p>

                        <h2>Penelitian dan Pengembangan Produk (PPDB) - Penerimaan Siswa Baru</h2>

                        <p>Selamat datang di Proses Pendaftaran dan Penerimaan Siswa Baru (PPDB) sekolah kami! Kami menghargai minat dan partisipasi Anda dalam memberikan pendidikan terbaik bagi putra-putri Anda.</p>

                        <h3>Tentang PPDB:</h3>
                        <p>Proses Pendaftaran dan Penerimaan Siswa Baru (PPDB) merupakan langkah awal untuk menjadi bagian dari komunitas pendidikan kami. PPDB adalah proses seleksi yang transparan dan adil, dirancang untuk menyediakan kesempatan yang sama bagi semua calon siswa.</p>

                        {{-- <h3>Langkah-langkah PPDB:</h3>
                        <ol>
                            <li>Pendaftaran Online:
                                <p>Calon siswa dapat mengakses formulir pendaftaran secara online melalui platform kami. Isilah informasi yang diperlukan dengan cermat dan lengkap.</p>
                            </li>

                            <li>Verifikasi Dokumen:
                                <p>Setelah pendaftaran, tim kami akan melakukan verifikasi dokumen untuk memastikan kelengkapan dan keaslian informasi yang diberikan.</p>
                            </li>

                            <li>Ujian Seleksi (jika diperlukan):
                                <p>Beberapa program atau tingkat pendidikan mungkin mengharuskan calon siswa mengikuti ujian seleksi untuk menilai kemampuan akademis atau keterampilan khusus.</p>
                            </li>

                            <li>Pengumuman Hasil:
                                <p>Hasil seleksi akan diumumkan secara transparan. Calon siswa yang diterima akan mendapatkan informasi lebih lanjut mengenai proses pendaftaran lanjutan.</p>
                            </li>

                            <li>Proses Pendaftaran Lanjutan:
                                <p>Calon siswa yang diterima akan diminta untuk melengkapi proses pendaftaran lanjutan, termasuk pembayaran biaya pendidikan dan administrasi.</p>
                            </li>
                        </ol>

                        <h3>Keunggulan PPDB Kami:</h3>
                        <ul>
                            <li><strong>Transparansi:</strong> Kami menekankan transparansi dalam setiap langkah proses PPDB, memberikan informasi yang jelas kepada calon siswa dan orang tua.</li>

                            <li><strong>Kesetaraan Peluang:</strong> PPDB kami didesain untuk memberikan kesempatan yang sama bagi setiap calon siswa, tanpa memandang latar belakang atau status ekonomi.</li>

                            <li><strong>Dukungan Tim Profesional:</strong> Tim kami yang berdedikasi akan memberikan dukungan penuh selama proses PPDB, menjawab pertanyaan dan memberikan bantuan yang diperlukan.</li>
                        </ul>

                        <p>Dengan senang hati, kami mengundang Anda untuk menjadi bagian dari komunitas pendidikan kami melalui PPDB. Silakan kunjungi situs web kami untuk informasi lebih lanjut atau hubungi tim kami jika Anda memiliki pertanyaan.</p>

                        <p>Terima kasih atas kepercayaan Anda dalam memilih sekolah kami sebagai tempat pendidikan untuk putra-putri tercinta Anda.</p>

                        <div class="signature">
                            <p>Salam hangat,</p>
                            <p>[Sertifikasi - Aziz]</p>
                        </div> --}}

                        <div class="button-container-icon">
                            <a href="{{ route('dashboard.user') }}" class="btn btn-primary custom-button-home" type="submit">Isi Formulir</a>
                        </div>
                    </div>

                    <div class="col">
                        <img src="images/home.jpg" class="img-fluid custom-image-home" alt="home">
                    </div>
                </div>
            </div>
        </section>


    <section id="footer-web" class="footer-web">
        <footer class="text-center text-lg-start costume-footer bg-dark text-white">
            <div class="container">
                <div class="text-center">
                    <h1 class="custome-big-footer">PPDB ID</h1>
                </div>
            </div>
        </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
