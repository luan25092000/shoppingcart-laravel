@extends('layouts.template')

@section('title','Thông tin đăng nhập')

@section('content')
    <div class="main-content">
        <h2 class="content-signin">Thông tin đăng nhập</h2>
        <div class="background" style="background-image: url(./img/about_header_bg.webp);"></div>
    </div>
    <div class="profile">
        @if (Auth::check())
            <p>First name: {{ Session::get('user')->firstname }}</p>
            <p>Last name: {{ Session::get('user')->lastname }}</p>
            <p>Email: {{ Session::get('user')->email }}</p>
            <p>Innitiated date: {{ Session::get('user')->created_at->format('Y-m-d') }}</p>
        @endif
    </div>
@endsection