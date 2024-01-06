@extends('layouts.nav-auth')

<body>
    <div class="container">
        <div class="row justify-content-center">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-3 mt-3">Sign Up</h5>
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter yourname" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Enter phone" required>
                            </div>
                            <button type="submit" class="btn btn-primary form-control mb-3">Register</button>
                            <p class="text-center"> Already have an account? <a href="login"
                                    class="text-decoration-none mb-3">Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>
