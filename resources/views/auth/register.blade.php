<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/all.min.css') }}">
    <title>Register</title>
    <style>
        body {
            background-color: #567B9C;
            font-family: 'Georgia', serif;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="text-center">
            <img src="{{ asset('uploads/rumah.png') }}" alt="lg" class="img-fluid rounded-circle text-warning" style="max-width: 80px;">
            <div class="fs-2 fw-bold text-white">Register Laundry</div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow" style="width: 400px; background-color: #bbcad9">
                    <div class="card-body">
                        <form action="{{ Route('registerProses') }}" method="POST">
                            @csrf
                            
                            <div class="mb-2">
                                <label class="form-label"><i class="fa fa-user"></i>Username</label>
                                <input type="text" name="name" class="form-control" style="background-color:#bbcad9">
                            </div>
                            <div class="mb-2">
                                <label class="form-label"><i class="fa fa-lock"></i>Password</label>
                                <input type="password" name="password" class="form-control" style="background-color:#bbcad9">
                            </div>
                            <div class="mb-2">
                                <label class="form-label"><i class="fa fa-envelope"></i>Email</label>
                                <input type="text" name="email" class="form-control" style="background-color:#bbcad9">
                            </div>
                            <div class="mb-2">
                                <label class="form-label"><i class="fa fa-phone"></i>No Telepon</label>
                                <input type="text" name="no_telepon" class="form-control" style="background-color:#bbcad9">
                            </div>
                            <div class="mb-2">
                                <label class="form-label"><i class="fa fa-home"></i>Alamat</label>
                                <input type="text" name="alamat" class="form-control" style="background-color:#bbcad9">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-light btn-lg shadow-lg mt-3 w-100">REGISTER</button>
                            </div>
                        </form>
                         <div class="text-center text-lg fs-6">
                            <p class='text-gray-600'>Sudah Punya Akun? <a href="{{ route("login") }}" class="font-bold">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('bootstrap/all.min.js') }}"></script>

</body>
</html>