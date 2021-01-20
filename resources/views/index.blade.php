@extends('layouts.template')

@section('title','Trang chủ')

@section('content')
    <!-- slide -->
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="./img/img_slider_3.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="./img/img_slider_4.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/img_slider_5.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev"> <span
                class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next"> <span
                class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end slide -->
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 position-button-slide">
                <div class="own-one owl-carousel owl-theme owl-carousel-type1">
                    <div class="card">
                        <a href="#">
                            <img src="./img/bed2.webp" class="card-img-top" alt="...">
                            <p class="title-collection">BÀN - Table</p>
                        </a>
                        <a href="#">
                            <img src="./img/bed3.webp" class="card-img-top" alt="...">
                            <p class="title-collection">SOFA - Sofa</p>
                        </a>

                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="./img/bed2.webp" class="card-img-top" alt="...">
                            <p class="title-collection">BÀN - Table</p>
                        </a>
                        <a href="#">
                            <img src="./img/bed3.webp" class="card-img-top" alt="...">
                            <p class="title-collection">SOFA - Sofa</p>
                        </a>

                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="./img/bed4.webp" class="card-img-top" alt="...">
                            <p class="title-collection">BÀN - Table</p>
                        </a>
                        <a href="#">
                            <img src="./img/bed5.webp" class="card-img-top" alt="...">
                            <p class="title-collection">SOFA - Sofa</p>
                        </a>

                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="./img/bed7.webp" class="card-img-top" alt="...">
                            <p class="title-collection">BÀN - Table</p>
                        </a>
                        <a href="#">
                            <img src="./img/bed8.webp" class="card-img-top" alt="...">
                            <p class="title-collection">SOFA - Sofa</p>
                        </a>

                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="./img/bed9.webp" class="card-img-top" alt="...">
                            <p class="title-collection">BÀN - Table</p>
                        </a>
                        <a href="#">
                            <img src="./img/bed10.webp" class="card-img-top" alt="...">
                            <p class="title-collection">SOFA - Sofa</p>
                        </a>

                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="./img/bed9-9.webp" class="card-img-top" alt="...">
                            <p class="title-collection">BÀN - Table</p>
                        </a>
                        <a href="#">
                            <img src="./img/bed10-10.webp" class="card-img-top" alt="...">
                            <p class="title-collection">SOFA - Sofa</p>
                        </a>

                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="./img/bed8-8.webp" class="card-img-top" alt="...">
                            <p class="title-collection">BÀN - Table</p>
                        </a>
                        <a href="#">
                            <img src="./img/bed7-7.webp" class="card-img-top" alt="...">
                            <p class="title-collection">SOFA - Sofa</p>
                        </a>

                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="./img/bed6-6.webp" class="card-img-top" alt="...">
                            <p class="title-collection">BÀN - Table</p>
                        </a>
                        <a href="#">
                            <img src="./img/bed5-5.webp" class="card-img-top" alt="...">
                            <p class="title-collection">SOFA - Sofa</p>
                        </a>

                    </div>
                </div>
                <div class="btns-carousel-slide">
                    <div class="customNextBtn"><svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg></div>
                    <div class="customPreviousBtn"><svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg></div>
                </div>
            </div>
            <div class="col-md-12 content-concept">
                <div class="row">
                    <div class="col-md-6">
                        <a href="#">
                            <h3>M-Concept - Giải pháp nội thất toàn diện</h3>
                        </a>
                        <p>Concept là gói sản phẩm nội thất và cải tạo không gian toàn diện theo thiết kế có sẵn từ
                            thương hiệu Make My Home
                            <br>
                            Concept by Make My Home sẽ mang đến những giải pháp nội thất tối giản với độ ứng dụng
                            cao, phù hợp với nhiều phong cách khác nhau, tạo ra không gian sống tiện nghi, thoải mái
                            và giúp bạn thực sự thư giãn mỗi khi trở về nhà.</p>
                    </div>
                    <div class="col-md-6 text-center mt-3">
                        <h2>TÍNH NĂNG NỔI BẬT</h2>
                        <a href="#">
                            <h4>THỜI GIAN NHANH CHÓNG</h4>
                        </a>
                        <a href="#">
                            <h4><a href="#">
                                    <h4>THỜI GIAN NHANH CHÓNG</h4>
                                </a></h4>
                        </a>
                        <a href="#">
                            <h4>THẨM MỸ TIN CẬY</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 position-button-slide">
                <div class="own-one owl-carousel owl-theme owl-carousel-type2">
                    <div class="card">
                        <a href="#">
                            <img src="./img/bep_pr1.webp" class="card-img-top" alt="...">
                        </a>

                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="./img/bep_pr2.webp" class="card-img-top" alt="...">
                        </a>

                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="./img/bep_pr3.webp" class="card-img-top" alt="...">
                        </a>

                    </div>
                </div>
                <div class="btns-carousel-slide">
                    <div class="customNextBtn"><svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg></div>
                    <div class="customPreviousBtn"><svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid content-img-items mt-4">
        <div class="row">
            <div class="col-md-6 no-mr no-pd overflow-hidden">
                <div class="row">
                    <div class="col-md-12 no-mr no-pd">
                        <a href="#"><img src="./img/img_banner_1.webp" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md-6 no-mr no-pd">
                        <a href="#"><img src="./img/img_banner_2.webp" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md-6 no-mr no-pd">
                        <a href="#"><img src="./img/img_banner_3.webp" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 no-mr no-pd">
                <a href="#"><img src="./img/img_banner_4.webp" style="height: 700px" class="img-fluid" alt=""></a>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 about-us">
        <div class="row">
            <div class="col-md-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ml-auto">
                            <h1>About Us</h1>
                            <p>Tại MAKE MY HOME, tất cả sản phẩm trang trí nội thất & giải pháp không gian sống
                                không chỉ đơn thuần tuân thủ theo ngôn ngữ giản lược của Minimalism, mà còn cân bằng
                                được tính năng và độ thẩm mỹ cần có.</p>
                            <p>“Ít tức là nhiều", nhưng mỗi chi tiết xuất hiện trên thiết kế đều là một sự chăm chút
                                kỹ lưỡng và hoàn hảo. Và đó cũng chính là tôn chỉ hoạt động của MAKE MY HOME. Với
                                tinh thần cầu tiến luôn cố gắng hết mình để cung cấp những sản phẩm chất lượng cộng
                                với dịch vụ thân thiện cho khách hàng, chúng tôi hy vọng có thể chia sẻ một niềm tin
                                cố hữu với tất cả mọi người: “Cuộc sống sẽ trở nên tốt đẹp hơn khi không gian sống
                                được quan tâm và đầu tư đúng mực.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 no-mr no-pd">
                <a href="#"><img src="./img/img_Aboutus_title.webp" class="img-fluid" alt=""></a>
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