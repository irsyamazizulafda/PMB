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
                        <div class="button-container">
                            <a href="login" class="btn btn-outline-light custom-button">LOGIN</a>
                            <a href="register" class="btn btn-primary custom-button">REGISTER</a>
                        </div>
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
                        <p class="typography-text">Welcome 
                        </p>
                        <div class="button-container-icon">
                            <button class="btn btn-primary custom-button-home" type="submit">Get Started</button>
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
                    <h1 class="custome-big-footer">FASHION ID</h1>
                </div>
            </div>
        </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
