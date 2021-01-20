@extends('layouts.template')

@section('title','Thiết kế - Thi công')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/thietke-thicong/thietke-thicong1.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/thietke-thicong/thietke-thicong6.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 item-article">
                <a href="#">
                    <img src="./img/thietke-thicong/thietke-thicong2.webp" alt="" class="img-fluid">
                    <h2 class="mt-3">The Moon - Ánh trăng giữa lòng đô thị</h2>
                </a>
                <p style="text-align: justify;"><strong>Chủ đầu tư:</strong> Anh Vương - Chị Vy<br><strong>Địa
                        điểm:</strong> Chung cư Richstar, Tân Phú, Hồ Chí Minh<br><strong>Loại công trình:</strong>
                    Căn hộ 3 PN</p>
            </div>
            <div class="col-md-5 ml-auto item-article">
                <a href="#">
                    <img src="./img/thietke-thicong/thietke-thicong4.webp" alt="" class="img-fluid">
                    <h2 class="mt-3">The Moon - Ánh trăng giữa lòng đô thị</h2>
                </a>
                <p style="text-align: justify;"><strong>Chủ đầu tư:</strong> Anh Vương - Chị Vy<br><strong>Địa
                        điểm:</strong> Chung cư Richstar, Tân Phú, Hồ Chí Minh<br><strong>Loại công trình:</strong>
                    Căn hộ 3 PN</p>
            </div>
            <div class="col-md-5 item-article">
                <a href="#">
                    <img src="./img/thietke-thicong/thietke-thicong3.webp" alt="" class="img-fluid">
                    <h2 class="mt-3">The Moon - Ánh trăng giữa lòng đô thị</h2>
                </a>
                <p style="text-align: justify;"><strong>Chủ đầu tư:</strong> Anh Vương - Chị Vy<br><strong>Địa
                        điểm:</strong> Chung cư Richstar, Tân Phú, Hồ Chí Minh<br><strong>Loại công trình:</strong>
                    Căn hộ 3 PN</p>
            </div>
            <div class="col-md-5 item-article ml-auto">
                <a href="#">
                    <img src="./img/thietke-thicong/thietke-thicong5.webp" alt="" class="img-fluid">
                    <h2 class="mt-3">The Moon - Ánh trăng giữa lòng đô thị</h2>
                </a>
                <p style="text-align: justify;"><strong>Chủ đầu tư:</strong> Anh Vương - Chị Vy<br><strong>Địa
                        điểm:</strong> Chung cư Richstar, Tân Phú, Hồ Chí Minh<br><strong>Loại công trình:</strong>
                    Căn hộ 3 PN</p>
            </div>
        </div>
    </div>
    <!-- carousel bottom -->
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