@extends('layouts.template')

@section('title','Concept')

@section('content')
    <div class="container mt-5">
        <div class="container-child-concept">
            <div class="container-child-concept-inner mr-3">
                <img src="img/concept/concept.png" alt="..." />
                <h2 class="introduct-concept">GIỚI THIỆU VỀ CONCEPT</h2>
                <div>
                    <span style="font-weight: bold; color:#676767;">Concept</span> là gói sản phẩm nội thất và cải
                    tạo không gian hoàn thiện theo thiết kế có sẵn
                    từ
                    thương hiệu Make My Home
                </div>
                <div>
                    <span style="font-weight: bold; color:#676767;">Concept by MAKE MY HOME</span> sẽ mang đến những
                    giải pháp nội thất tối giản với độ ứng dụng
                    cao, phù
                    hợp
                    với nhiều phong cách khác nhau, tạo ra không gian sống tiện nghi, thoải mái và giúp bạn thực sự
                    thư
                    giãn mỗi khi trở về nhà.
                </div>
            </div>
            <div class="container-child-concept-1-inner">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/OuhOJNVXWpQ" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <img src="img/concept/content.png" width="100%" />
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <a href="./dalat-concept" class="product-block-concept">
                    <img src="img/concept/product1.png" width="100%" alt="..." />
                    <h5 class="mt-2" style="color:black;">DALAT Concept</h5>
                    <div>Scandinavian: ấm áp, mộc mạc, gần gũi</div>
                    <div>Giá chỉ từ: <strong>56,670,000đ</strong></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6">
                <a href="#" class="product-block-concept">
                    <img src="img/concept/product2.png" width="100%" alt="..." />
                    <h5 class="mt-2" style="color:black;">JOHY Concept</h5>
                    <div>Minimal: trắng sáng, tối giản, tinh tế</div>
                    <div>Giá chỉ từ: <strong>45,680,000đ</strong></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 mt-5">
                <a href="#" class="product-block-concept">
                    <img src="img/concept/product3.png" width="100%" alt="..." />
                    <h5 class="mt-2" style="color:black;">HANO Concept</h5>
                    <div>Cổ điển: sang trọng, tinh xảo, độc đáo</div>
                    <div>Giá chỉ từ: <strong>73,850,000đ</strong></div>
                </a>
            </div>
        </div>
        <div class="container mt-5 share-moment">
            <div class="row d-flex align-items-center">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 position-button-slide">
                            <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                                <div class="card">
                                    <a href="#">
                                        <img src="./img/concept/anh1.png" class="card-img-top" alt="...">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="./img/concept/anh2.png" class="card-img-top" alt="...">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="./img/concept/anh3.png" class="card-img-top" alt="...">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="./img/concept/anh4.png" class="card-img-top" alt="...">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="./img/concept/anh5.png" class="card-img-top" alt="...">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="./img/concept/anh6.png" class="card-img-top" alt="...">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="./img/concept/anh7.png" class="card-img-top" alt="...">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="./img/concept/anh8.png" class="card-img-top" alt="...">
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
                <div class="col-md-4 mt-3">
                    <a href="#">
                        <h3 class="comment">Share your moments</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection