@extends('layouts.template')

@section('title','Sản phẩm')
    
@section('content')
    <div class="container-fluid content-img-items my-5">
        <div class="row">
            <div class="col-md-6 no-mr no-pd">
                <a href="#"><img src="./img/img_banner_4.webp" style="height: 700px" class="img-fluid" alt=""></a>
            </div>
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
        </div>
    </div>
    <div class="container">
        <div class="col-md-12 mt-5">
            <h1 class="title-products">Sản Phẩm Mới</h1>
            <div class="row">
                <div class="col-sm-12 position-button-slide">
                    <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                        <div class="product product-block">
                            <img src="./img/sofa1.webp" alt="...">
                            <img src="./img/sofa2.webp" class="imgMix" alt="...">
                            <div class="name">ELegant Combo</div>
                            <div class="subname">Ruột gốm ôm chữ nhật premium</div>
                            <div class="price">880,000₫</div>
                            <div class="detail">
                                <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                        </div>
                        <div class="product product-block">
                            <img src="./img/sofa5.webp" alt="...">
                            <img src="./img/sofa1.webp" class="imgMix" alt="...">
                            <div class="name">SIMPLE COMBO</div>
                            <div class="subname">Ruột gốm ôm chữ nhật premium</div>
                            <div class="price">880,000₫</div>
                            <div class="detail">
                                <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                        </div>
                        <div class="product product-block">
                            <img src="./img/sofa8.webp" alt="...">
                            <img src="./img/sofa2.webp" class="imgMix" alt="...">
                            <div class="name">CHIN</div>
                            <div class="subname">Ruột gốm ôm chữ nhật premium</div>
                            <div class="price">880,000₫</div>
                            <div class="detail">
                                <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                        </div>
                        <div class="product product-block">
                            <img src="./img/sofa6.webp" alt="...">
                            <img src="./img/sofa1.webp" class="imgMix" alt="...">
                            <div class="name">CHIN</div>
                            <div class="subname">Ruột gốm ôm chữ nhật premium</div>
                            <div class="price">880,000₫</div>
                            <div class="detail">
                                <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
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
    </div>
    <div class="container">
        <div class="col-md-12 my-5">
            <h1 class="title-products">Best Seller</h1>
            <div class="row">
                <div class="col-sm-12 position-button-slide">
                    <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                        <div class="product product-block">
                            <img src="./img/bed10-10.webp" alt="...">
                            <img src="./img/bed10.webp" class="imgMix" alt="...">
                            <div class="name">CUSTOMER</div>
                            <div class="subname">Ruột gốm ôm chữ nhật premium</div>
                            <div class="price-products">880,000₫</div>
                            <div class="del-price">1000,000₫</div>
                            <div class="detail">
                                <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <div class="sale-box">
                                -8%
                            </div>
                        </div>
                        <div class="product product-block">
                            <img src="./img/bed9.webp" alt="...">
                            <img src="./img/bed9-9.webp" class="imgMix" alt="...">
                            <div class="name">CUSTOMER CUSTOMER</div>
                            <div class="subname">Ruột gốm ôm chữ nhật premium</div>
                            <div class="price-products">880,000₫</div>
                            <div class="del-price">1000,000₫</div>
                            <div class="detail">
                                <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <div class="sale-box">
                                -8%
                            </div>
                        </div>
                        <div class="product product-block">
                            <img src="./img/bed8-8.webp" alt="...">
                            <img src="./img/bed8.webp" class="imgMix" alt="...">
                            <div class="name">CUSTOMER</div>
                            <div class="subname">Ruột gốm ôm chữ nhật premium</div>
                            <div class="price-products">880,000₫</div>
                            <div class="del-price">1000,000₫</div>
                            <div class="detail">
                                <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <div class="sale-box">
                                -8%
                            </div>
                        </div>
                        <div class="product product-block">
                            <img src="./img/bed7.webp" alt="...">
                            <img src="./img/bed7-7.webp" class="imgMix" alt="...">
                            <div class="name">CUSTOMER</div>
                            <div class="subname">Ruột gốm ôm chữ nhật premium</div>
                            <div class="price-products">880,000₫</div>
                            <div class="del-price">1000,000₫</div>
                            <div class="detail">
                                <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <div class="sale-box">
                                -8%
                            </div>
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
    </div>
    <div class="container">
        <h1 class="title-products">Nhóm sản phẩm</h1>
        <div class="products-group">
            <div class="products-group-item">
                <a href="#">
                    <img src="./img/type/type1.png" class="img-fluid" alt="">
                    <span>BÀN - Table</span>
                </a>
            </div>
            <div class="products-group-item">
                <a href="#">
                    <img src="./img/type/type2.png" class="img-fluid" alt="">
                    <span>BÀN - Table</span>
                </a>
            </div>
            <div class="products-group-item">
                <a href="#">
                    <img src="./img/type/type3.png" class="img-fluid" alt="">
                    <span>BÀN - Table</span>
                </a>
            </div>
            <div class="products-group-item">
                <a href="#">
                    <img src="./img/type/type4.png" class="img-fluid" alt="">
                    <span>BÀN - Table</span>
                </a>
            </div>
            <div class="products-group-item">
                <a href="#">
                    <img src="./img/type/type5.png" class="img-fluid" alt="">
                    <span>BÀN - Table</span>
                </a>
            </div>
            <div class="products-group-item">
                <a href="#">
                    <img src="./img/type/type6.png" class="img-fluid" alt="">
                    <span>BÀN - Table</span>
                </a>
            </div>
            <div class="products-group-item">
                <a href="#">
                    <img src="./img/type/type7.png" class="img-fluid" alt="">
                    <span>BÀN - Table</span>
                </a>
            </div>
            <div class="products-group-item">
                <a href="#">
                    <img src="./img/type/type8.png" class="img-fluid" alt="">
                    <span>BÀN - Table</span>
                </a>
            </div>
            <div class="products-group-item">
                <a href="#">
                    <img src="./img/type/type1.png" class="img-fluid" alt="">
                    <span>BÀN - Table</span>
                </a>
            </div>
            <div class="products-group-item">
                <a href="#">
                    <img src="./img/type/type2.png" class="img-fluid" alt="">
                    <span>BÀN - Table</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="title-products">New Collection</h1>
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
    </div>
    <div class="container">
        <div class="col-md-12 mt-5">
            <h1 class="title-products">You might like</h1>
            <div class="row">
                <div class="col-sm-12 position-button-slide">
                    <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                        <div class="product product-block">
                            <img src="./img/sofa1.webp" alt="...">
                            <img src="./img/sofa2.webp" class="imgMix" alt="...">
                            <div class="name">ELegant Combo</div>
                            <div class="subname">Ruột gốm ôm chữ nhật premium</div>
                            <div class="price">880,000₫</div>
                            <div class="detail">
                                <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                        </div>
                        <div class="product product-block">
                            <img src="./img/sofa5.webp" alt="...">
                            <img src="./img/sofa1.webp" class="imgMix" alt="...">
                            <div class="name">SIMPLE COMBO</div>
                            <div class="subname">Ruột gốm ôm chữ nhật premium</div>
                            <div class="price">880,000₫</div>
                            <div class="detail">
                                <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                        </div>
                        <div class="product product-block">
                            <img src="./img/sofa8.webp" alt="...">
                            <img src="./img/sofa2.webp" class="imgMix" alt="...">
                            <div class="name">CHIN</div>
                            <div class="subname">Ruột gốm ôm chữ nhật premium</div>
                            <div class="price">880,000₫</div>
                            <div class="detail">
                                <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                        </div>
                        <div class="product product-block">
                            <img src="./img/sofa6.webp" alt="...">
                            <img src="./img/sofa1.webp" class="imgMix" alt="...">
                            <div class="name">CHIN</div>
                            <div class="subname">Ruột gốm ôm chữ nhật premium</div>
                            <div class="price">880,000₫</div>
                            <div class="detail">
                                <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
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
    </div>
    <!-- Carousel bottom -->
    <div class="container mt-5 share-moment mt-5">
        <div class="row d-flex align-items-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 position-button-slide">
                        <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                            <div class="card">
                                <a href="#">
                                    <img src="./img/slide/anh1.jpg" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="./img/slide/anh2.jpg" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="./img/slide/anh3.jpg" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="./img/slide/anh4.jpg" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="./img/slide/anh5.jpg" class="card-img-top" alt="...">
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
@endsection