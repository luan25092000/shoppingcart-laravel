@extends('layouts.template')

@section('title','Đăng ký')

@section('content')
    <div class="main-content">
        <h2 class="content-signin">Đăng ký</h2>
        <div class="background" style="background-image: url(./img/about_header_bg.webp);"></div>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <form method="POST" action="{{ action('UserSignUp@store') }}" enctype="multipart/form-data" class="form-signin">

            @csrf

            <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text" class="form-control {{ $errors->has('firstname') ? 'error' : '' }} input-signin" id="firstname" name="firstname">
                @if ($errors->has('firstname'))
                    <div class="error text-danger">
                        {{ $errors->first('firstname') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text" class="form-control {{ $errors->has('lastname') ? 'error' : '' }} input-signin" id="lastname" name="lastname">
                @if ($errors->has('lastname'))
                    <div class="error text-danger">
                        {{ $errors->first('lastname') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }} input-signin" id="email" name="email">
                @if ($errors->has('email'))
                    <div class="error text-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'error' : '' }} input-signin" id="password" name="password">
                @if ($errors->has('password'))
                    <div class="error text-danger">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>
            <div class="sign-up-link"><a href="sign-in">Bạn đã có tài khoản rồi ?</a></div>
            <button type="submit" class="btn btn-signin">ĐĂNG KÝ</button>
        </form>
    </div>
@endsection