@extends('layouts.template')

@section('title','Thông tin đăng nhập')

@section('data',"{{$user}}")

@section('content')
    <div class="main-content">
        <h2 class="content-signin">Thông tin đăng nhập</h2>
        <div class="background" style="background-image: url(./img/about_header_bg.webp);"></div>
    </div>
    <div class="profile">
        <p>First name: {{$user->firstname}}</p>
        <p>Last name: {{$user->lastname}}</p>
        <p>Email: {{$user->email}}</p>
        <p>Innitiated date: {{$user->created_at->format('Y-m-d')}}</p>
    </div>
@endsection