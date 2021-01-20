@extends('layouts.template')

@section('title','Liên hệ')

@section('content')
    <!-- slide -->
    <div class="container-fluid">
        <div class="main-content">
            <h2 class="content">Giới thiệu</h2>
            <div class="background" style="background-image: url(./img/about_header_bg.webp);"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <h3>Để Lại Lời Nhắn!</h3>
                <form method="POST" action="{{ action('UserContact@store') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 15px">
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" placeholder="Tên" name="name" id="name">
                            <!-- Error -->
                            @if ($errors->has('name'))
                                <div class="error text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6" style="margin-bottom: 15px">
                            <input type="text" class="form-control {{ $errors->has('email') ? 'error' : '' }}" placeholder="Email" name="email" id="email">
                            <!-- Error -->
                            @if ($errors->has('email'))
                                <div class="error text-danger">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="margin-bottom: 15px">
                            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" placeholder="Tin nhắn:" name="message" id="message"></textarea>
                            @if ($errors->has('message text-danger'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lienhe">Gửi</button>
                </form>

            </div>
            <div class="col-md-4">
                <div class="contact-info lienhe">
                    <div class="contact-address">
                        <h4 style="overflow-y:hidden;">Thông tin liên hệ</h4>
                    </div>
                    <div class="diachi">
                        <address>
                            <p>
                            <ul class="list-info">
                                <li><strong>Công ty TNHH Kiến trúc và Nội thất Make My Home </strong></li>
                                <li><strong>GPĐKKD:</strong> số 0314329518 do Sở KHĐT TP.HCM cấp ngày 03/04/2017
                                </li>
                                <li><strong>Cửa hàng: </strong> 97-99 Cộng Hoà, lầu 3, P.4, Q.Tân Bình, HCM</li>
                                <li><strong>Hotline: </strong>028 62676466 - ‭0866757758</li>
                                <li><strong>Email: </strong>suppport@makemyhomevn.com</li>
                                </p>

                        </address>
                    </div>
                </div>
                <div class="trangxh">
                    <h4 style="overflow-y:hidden;">Trang xã hội</h4>
                    <div class="list-icon">
                        <a href="#" class="icon-footer" style="font-size: 16px;"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-footer" style="font-size: 16px;"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="icon-footer" style="font-size: 16px;"><i
                                class="fab fa-youtube"></i></i></a>
                        <a href="#" class="icon-footer" style="font-size: 16px;"><i
                                class="fab fa-twitter"></i></i></a>
                    </div>
                </div>
                <div class="contact-time">
                    <h4 style="overflow-y:hidden; margin-bottom: 10px;">Giờ làm việc</h4>
                    <div class="thoigian">
                        <p>
                            <li><strong>Văn phòng: </strong>Thứ 2 – Thứ 7; 9:00 – 18:00</li>
                            </ul>
                            <li><strong>Cửa hàng: </strong>Thứ 2 – Thứ 7; 9:00 – 21:00</li>
                            <li><strong>Nghỉ ngày chủ nhật </strong><br>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 share-moment">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 position-button-slide">
                        <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                            <div class="card">
                                <a href="#">
                                    <img src="./img/ins2.webp" class="card-img-top" alt="...">
                                </a>

                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="./img/ins4 (1).jpg" class="card-img-top" alt="...">
                                </a>

                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="./img/ins4.jpg" class="card-img-top" alt="...">
                                </a>

                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="./img/ins8.jpg" class="card-img-top" alt="...">
                                </a>

                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="./img/ins5.jpg" class="card-img-top" alt="...">
                                </a>

                            </div>
                        </div>
                        <div class="btns-carousel-slide">
                            <div class="customNextBtn"><svg width="1em" height="1em" viewBox="0 0 16 16"
                                    class="bi bi-chevron-right" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg></div>
                            <div class="customPreviousBtn"><svg width="1em" height="1em" viewBox="0 0 16 16"
                                    class="bi bi-chevron-left" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                </svg></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <h3>Share your moments</h3>
                </a>
            </div>
        </div>
    </div>
@endsection