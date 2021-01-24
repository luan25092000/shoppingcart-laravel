@extends('layouts.template')

@section('title','Đăng nhập')

@section('content')
    <div class="main-content">
        <h2 class="content-signin">Đăng nhập</h2>
        <div class="background" style="background-image: url(./img/about_header_bg.webp);"></div>
    </div>
    <div class="container">
        @if(Session::has('invalid'))
            <div class="alert alert-danger">
                {{Session::get('invalid')}}
            </div>
        @endif
    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <form method="POST" action="{{ action('UserSignIn@store') }}" enctype="multipart/form-data" class="form-signin">

            @csrf
    
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }} input-signin" id="email" name="email">
                @if ($errors->has('email'))
                    <div class="error text-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <label for="password">Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'error' : '' }} input-signin" id="password" name="password">
                @if ($errors->has('password'))
                    <div class="error text-danger">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>
            <div class="sign-up-link"><a href="sign-up">Nhấp vào đây để đăng ký !</a></div>
            <div class="d-flex mt-4 justify-content-between social-login">
                <a href="{{ route('login.facebook') }}" class="fb btn">
                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                </a>
                <a href="{{ route('login.google') }}" class="google btn"><i class="fa fa-google fa-fw">
                    </i> Login with Google+
                </a>
            </div>
            <button type="submit" class="btn btn-signin">ĐĂNG NHẬP</button>
        </form>
    </div>
@endsection