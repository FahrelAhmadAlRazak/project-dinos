@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div> -->

<div class="container">
    <div class="form-box">
        <img src="img/logodinos1.png" alt="">
        <h1><b>SIGN UP</b></h1>
        <form method="post" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                <div class="">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group">
                <label for="jalan" class="col-form-label text-md-end">{{ __('Jalan') }}</label>

                <div class="">
                    <input id="jalan" type="text" class="form-control @error('jalan') is-invalid @enderror" name="jalan" value="{{ old('jalan') }}" required autocomplete="jalan" autofocus>

                    @error('jalan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="kota" class="col-form-label text-md-end">{{ __('Kota') }}</label>

                <div class="">
                    <select id="kota" class="form-control @error('kota') is-invalid @enderror" name="id_kota" required autocomplete="kota" autofocus>
                        @foreach($datakota as $dakot)
                        <option value="{{ $dakot->id_kota }}">{{ $dakot->nama }}</option>
                        @endforeach
                    </select>

                    @error('id_kota')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="provinsi" class="col-form-label text-md-end">{{ __('Provinsi') }}</label>

                <div class="">
                    <select id="provinsi" class="form-control @error('kota') is-invalid @enderror" name="id_provinsi" required autocomplete="kota" autofocus>
                        @foreach($dataprovinsi as $daprov)
                        <option value="{{ $daprov->id_provinsi }}">{{ $daprov->nama }}</option>
                        @endforeach
                    </select>
                    @error('provinsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="nomor_telpon" class="col-form-label text-md-end">{{ __('Nomor Telepon') }}</label>

                <div class="">
                    <input id="nomor_telpon" type="string" class="form-control @error('nomor_telpon') is-invalid @enderror" name="nomor_telpon" value="{{ old('nomor_telpon') }}" required autocomplete="nomor_telpon" autofocus>

                    @error('nomor_telpon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir" class="col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>

                <div class="">
                    <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus>

                    @error('tanggal_lahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="">
                    <button type="submit" class="btn1">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection