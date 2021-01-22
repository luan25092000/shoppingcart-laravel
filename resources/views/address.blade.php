@extends('layouts.template')

@section('title','Địa chỉ')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="main-content">
                <h2 class="content">Địa chỉ</h2>
                <div class="background" style="background-image: url(./img/about_header_bg.webp);"></div>
            </div>
        </div>
    </div>
    <div class="container mt-4 mb-4 d-flex justify-content-around">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.294574477852!2d106.63851091411658!3d10.78873566191816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ead897053f9%3A0xcc15b15f2fc5b36d!2zNzQwIMOCdSBDxqEsIFBoxrDhu51uZyAxMywgVMOibiBCw6xuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1611289795892!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="manager">
            <h1>Quản lý</h1>
            <img src="{{ URL::to('/') }}/img/manager.jpg" width="200px" height="200px" /> 
            <p>Name: Nguyễn Hữu Luân</p>
            <p>Age: 20</p>
        </div>
    </div>
@endsection