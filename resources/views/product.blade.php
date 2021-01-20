@extends('layouts.template')

@section('title','Sản phẩm')

@section('content')
    <div class="container">
        <div class="container-inner-1">
            <a href="#" class="home">Trang chủ</a> <span class="collection">/ BÀN - TABLES</span>
            <h3 class="title mt-2">BÀN - TABLES</h3>
            <div class="container-inner-child mt-3">
                <div class="line-1 mb-5">
                    <a href="#" class="product-block-inner-1">
                        <img src="img/type/type1.png" alt="picture" width="100%" height="100%" />
                        <div class="type-product">BÀN ĂN</div>
                    </a>
                    <a href="#" class="product-block-inner-1">
                        <img src="img/type/type2.png" alt="picture" width="100%" height="100%" />
                        <div class="type-product">BỘ BÀN ĂN</div>
                    </a>
                    <a href="#" class="product-block-inner-1">
                        <img src="img/type/type3.png" alt="picture" width="100%" height="100%" />
                        <div class="type-product">BÀN LÀM VIỆC</div>
                    </a>
                    <a href="#" class="product-block-inner-1">
                        <img src="img/type/type4.png" alt="picture" width="100%" height="100%" />
                        <div class="type-product">BÀN SOFA, BÀN GÓC</div>
                    </a>
                </div>
                <div class="line-2">
                    <a href="#" class="product-block-inner-1">
                        <img src="img/type/type5.png" alt="picture" width="100%" height="100%" />
                        <div class="type-product">KỆ/TỦ ĐẦU GIƯỜNG</div>
                    </a>
                    <a href="#" class="product-block-inner-1">
                        <img src="img/type/type6.png" alt="picture" width="100%" height="100%" />
                        <div class="type-product">BÀN CAFE</div>
                    </a>
                    <a href="#" class="product-block-inner-1">
                        <img src="img/type/type7.png" alt="picture" width="100%" height="100%" />
                        <div class="type-product">BÀN TRANG ĐIỂM</div>
                    </a>
                    <a href="#" class="product-block-inner-1">
                        <img src="img/type/type8.png" alt="picture" width="100%" height="100%" />
                        <div class="type-product">CHÂN & MẶT BÀN</div>
                    </a>
                </div>
            </div>
        </div>
        <img src="img/picture/picture2.png" alt="picture" width="100%" height="auto" class="mt-4" />
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-sm-12 position-button-slide">
                    <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                        <a href="{{ route("product.table") }}">
                            <div class="product product-block">
                                <img src="./img/slide/product/product1.png" alt="..." width="214px" height="214px">
                                <img src="./img/slide/product/product1-hover.png" class="imgMix" alt="..." width="214px"
                                    height="214px">
                                <div class="name">CHIN</div>
                                <div class="subname">Bàn làm việc</div>
                                <div class="price">880,000₫</div>
                                <div class="detail">
                                    <i class="far fa-eye"></i>
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="product product-block">
                                <img src="./img/slide/product/product2.png" alt="..." width="214px" height="214px">
                                <img src="./img/slide/product/product2-hover.png" class="imgMix" alt="..." width="214px"
                                    height="214px">
                                <div class="name">CHIN</div>
                                <div class="subname">Bàn làm việc</div>
                                <div class="price">990,000₫</div>
                                <div class="detail">
                                    <i class="far fa-eye"></i>
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="product product-block">
                                <img src="./img/slide/product/product3.png" alt="..." width="214px" height="214px">
                                <img src="./img/slide/product/product3-hover.png" class="imgMix" alt="..." width="214px"
                                    height="214px">
                                <div class="name">CHIN</div>
                                <div class="subname">Bàn làm việc</div>
                                <div class="price">990,000₫</div>
                                <div class="detail">
                                    <i class="far fa-eye"></i>
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="product product-block">
                                <img src="./img/slide/product/product4.png" alt="..." width="214px" height="214px">
                                <img src="./img/slide/product/product4-hover.png" class="imgMix" alt="..." width="214px"
                                    height="214px">
                                <div class="name">CHIN</div>
                                <div class="subname">Bàn làm việc</div>
                                <div class="price">880,000₫</div>
                                <div class="detail">
                                    <i class="far fa-eye"></i>
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                            </div>
                        </a>
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
    </div>
@endsection