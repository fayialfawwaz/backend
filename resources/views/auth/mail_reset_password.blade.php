@extends('layouts.custom')

@section('title', 'Reset Password Page')

@section('content')
<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
    <div class="login-brand">
        <img src="stisla/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Reset Password</h4>
        </div>

        <div class="card-body">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        <a href="{{ route('validasi.forgot.password', ['otp' => $otp]) }}" style="color: white">Klik Disini</a>
                    </button>
                </div>
        </div>
    </div>
    <div class="simple-footer">
        Copyright &copy; Stisla 2018
    </div>
</div>
@endsection
