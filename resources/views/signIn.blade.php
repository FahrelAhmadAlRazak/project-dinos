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
    <link rel="stylesheet" type="text/css" href="css/signIn.css">
</head>
<div class="container">
    <div class="form-box">
        <img src="img/logodinos1.png" alt="">
        <h1><b>SIGN IN</b></h1>
        @if(session('success'))
        <p class="alert alert-success"> {{ session('success') }}</p>
        @endif
        <!-- @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger"> {{ $err }}</p>
        @endforeach
        @endif -->
        <form method="post" action="{{ route('signIn.action') }}">
            @csrf
            <div class="form-group">
                <div class="">
                    <label for="email"></label>
                    <input type="string" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ Session::get('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                </div>
                <div class="" id="">
                    <label for="password"></label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" value="{{ old('password') }}" >
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn1 mt-4">Sign In</button>
                    <p class="p-signin">Belum Memiliki Akun ? <a href="halaman_signUp.php">Sign Up</a></p>
                </div>



            </div>
        </form>
    </div>
</div>