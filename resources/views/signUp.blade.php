<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title',$title)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" type="text/css" href="style1.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/signUp.css">
</head>







<div class="container">
    <div class="form-box">
        <img src="img/logodinos1.png" alt="">
        <h1><b>SIGN UP</b></h1>
        <!-- @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger"> {{ $err }}</p>
        @endforeach
        @endif -->
        <form method="post" action="{{ route('signUp.action') }}">
            @csrf
            <div class="form-group">
                <div class=>
                    <label for="nama"></label>
                    <input type="string" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Nama" value="{{ old('name') }}">
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="">
                    <label for="username"></label>
                    <input type="string" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{ old('username') }}">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="">
                    <label for="email"></label>
                    <input type="string" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="" id="">
                    <label for="password"></label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" value="{{ old('password') }}">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="" >
                    <label for="nomor_identitas"></label>
                    <input type="string" class="form-control @error('nomor_identitas') is-invalid @enderror" name="nomor_identitas" id="nomor_identitas" placeholder="Nomor Identitas" value="{{ old('nomor_identitas') }}">
                    @error('nomor_identitas')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="" >
                    <label for="jalan"></label>
                    <input type="string" class="form-control @error('jalan') is-invalid @enderror" name="jalan" id="jalan" placeholder="Jalan" value="{{ old('jalan') }}">
                    @error('nomor_identitas')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="" >
                    <label for="kota"></label>
                    <input type="string" class="form-control @error('kota') is-invalid @enderror" name="kota" id="kota" placeholder="Kota" value="{{ old('kota') }}">
                    @error('nomor_identitas')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="" >
                    <label for="provinsi"></label>
                    <input type="string" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi" placeholder="provinsi" value="{{ old('provinsi') }}">
                    @error('nomor_identitas')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="" >
                    <label for="alamat"></label>
                    <input type="string" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="" >
                    <label for="no_telpon"></label>
                    <input type="string" class="form-control @error('no_telpon') is-invalid @enderror" name="no_telpon" id="no_telpon" placeholder="No Telpon" value="{{ old('no_telpon') }}">
                    @error('no_telpon')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="tanggal_lahir"></label>
                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ old('tanggal_lahir') }}">
                    @error('tanggal_lahir')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn1 ">Sign Up</button>
                    <p class="p-signin">Sudah Memiliki Akun ? <a href="halaman_signIn.php">Sign In</a></p>
                </div>


            </div>
        </form>
    </div>
</div>
