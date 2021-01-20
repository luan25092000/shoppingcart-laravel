@extends('layouts.template')

@section('title','Dalat concept')

@section('content')
    <div class="container-fluid mt-5" style="overflow: hidden;">
        <div class="row">
            <div class="col-sm-8">
                <img src="img/dalat-concept/dalat-concept.png" alt="..." class="ml-3" width="100%" />
            </div>
            <div class="col-sm-4 mt-5">
                <img src="img/dalat-concept/title-dalat-concept.PNG" alt="..." class="mb-3" />
                <div style="font-weight: bold;" class="mb-3">Gallery</div>
                <div class="row mr-2">
                    <div class="col-sm-6 mb-5">
                        <a href="#" width="100%" height="auto">
                            <img src="img/concept/product1.png" width="100%" height="auto" alt="..." />
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5">
                        <a href="#" width=100% height="auto">
                            <img src="img/concept/product2.png" width="100%" height="auto" alt="..." />
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" width="100%" height="auto">
                            <img src="img/product/product3.png" width="100%" height="auto" alt="..." />
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" width="100%" height="auto">
                            <img src="img/dalat-concept/dalat-concept-inner.png" width="100%" height="auto"
                                alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-dalat-concept">
        <div class="row mt-4">
            <div class="col-xs-12 col-sm-7 mt-5">
                <div class="introduce-content">
                    <p style="font-weight:600; font-size:1.3rem; color:black;">DALAT CONCEPT – VẺ ĐẸP THƠ MỘNG NƠI
                        CAO NGUYÊN</p>
                    <p>Các sản phẩm của <strong>DALAT Concept</strong> mang màu trắng tinh khôi và sắc gỗ nhẹ nhàng,
                        điểm xuyến với những đường cong uyển chuyển hài hoà, đem đến cho không gian một phong cách
                        Bắc Âu ấm áp và trong lành.</p>
                    <p>Lấy cảm hứng từ thành phố Đà Lạt ngàn hoa, <strong>DALAT Concept</strong> mang đến sự tươi
                        sáng như ánh nắng vàng long lanh nhảy múa trên mặt hồ Xuân Hương phẳng lặng.</p>
                    <p>Ngoài ra, sự kết hợp tuyệt vời giữa ngăn tủ kín và mở ở mỗi sản phẩm cũng chính là một trong
                        những điểm nhấn đặc biệt của <strong>DALAT Concept</strong> cho mọi không gian phòng. Đến
                        với <strong>DALAT Concept</strong>, bạn sẽ cảm nhận được nét bình yên dịu dàng và thuần
                        khiết trong căn nhà của mình.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5">
                <div class="introduce-image">
                    <img src="img/product/product3.png" width="100%" alt="..." />
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr />
        <h3 class="ml-3" style="color:#676767;">Lựa chọn các gói</h3>
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item nav-item-dalat-concept">
                <a class="nav-link active nav-link-dalat-concept" data-toggle="tab" href="#basic">Basic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-dalat-concept" data-toggle="tab" href="#standard">Standard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-dalat-concept" data-toggle="tab" href="#prenium1">Prenium 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-dalat-concept" data-toggle="tab" href="#prenium2">Prenium 2</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <form method="post" action="">

        </form>
        <div class="tab-content mt-4">
            <div id="basic" class="container tab-pane active">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <img src="img/dalat-concept/basic.png" alt="..." width="100%" height="auto" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <h5 style="color:#676767;">DALAT Concept - Gói cơ bản</h5>
                        <small style="color:#676767;">Gói nội thất cơ bản</small>
                        <div><small style="color:#676767;">Gía chỉ từ:</small></div>
                        <div class="price">56,670,000₫</div>
                        <small style="color:#676767;">Gồm hơn 13 sản phẩm trọn gói nội thất cơ bản</small>
                        <div><i><small style="color:#676767;">Xem thêm DALAT collection</small></i></div>
                        <div><i><small style="color:#676767;">Số lượng phòng ngủ</small></i></div>
                        <select class="mt-2 p-2 select-dalat-concept" id="select-dalat-concept">
                            <option value="1">1 PHÒNG NGỦ</option>
                            <option value="2">2 PHÒNG NGỦ</option>
                            <option value="3">3 PHÒNG NGỦ</option>
                        </select>
                        <div><i><small style="color:#676767;">Lựa chọn bếp</small></i></div>
                        <select class="mt-2 p-2 select-dalat-concept">
                            <option>KHÔNG BẾP</option>
                            <option>CÓ BẾP</option>
                        </select>
                        <button class="add-to-cart mt-3" style="background-color:#676767; color:white;">Thêm vào
                            giỏ</button>
                    </div>
                </div>
            </div>
            <div id="standard" class="container tab-pane fade">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <img src="img/product/product3.png" alt="..." width="100%" height="auto" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <h5 style="color:#676767;">DALAT Concept - Gói tiêu chuẩn</h5>
                        <small style="color:#676767;">Gói nội thất tiêu chuẩn</small>
                        <div><small style="color:#676767;">Gía chỉ từ:</small></div>
                        <div class="price">72,350,000₫</div>
                        <small style="color:#676767;">Gồm hơn 25 sản phẩm trọn gói nội thất cơ bản và trang
                            trí</small>
                        <div><i><small style="color:#676767;">Xem thêm DALAT collection</small></i></div>
                        <div><i><small style="color:#676767;">Số lượng phòng ngủ</small></i></div>
                        <select class="mt-2 p-2 select-dalat-concept">
                            <option>1 PHÒNG NGỦ</option>
                            <option>2 PHÒNG NGỦ</option>
                            <option>3 PHÒNG NGỦ</option>
                        </select>
                        <div><i><small style="color:#676767;">Lựa chọn bếp</small></i></div>
                        <select class="mt-2 p-2 select-dalat-concept">
                            <option>KHÔNG BẾP</option>
                            <option>CÓ BẾP</option>
                        </select>
                        <button class="add-to-cart mt-3" style="background-color:#676767; color:white;">Thêm vào
                            giỏ</button>
                    </div>
                </div>
            </div>
            <div id="prenium1" class="container tab-pane fade">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <img src="img/concept/product1.png" alt="..." width="100%" height="auto" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <h5 style="color:#676767;">DALAT Concept - Gói cao cấp 1</h5>
                        <small style="color:#676767;">Gói nội thất cao cấp 1</small>
                        <div><small style="color:#676767;">Gía chỉ từ:</small></div>
                        <div class="price">101,690,000₫</div>
                        <small style="color:#676767;">Gồm hơn 13 sản phẩm trọn gói nội thất cơ bản</small>
                        <div><i><small style="color:#676767;">Xem thêm DALAT collection</small></i></div>
                        <div><i><small style="color:#676767;">Số lượng phòng ngủ</small></i></div>
                        <select class="mt-2 p-2 select-dalat-concept">
                            <option>1 PHÒNG NGỦ</option>
                            <option>2 PHÒNG NGỦ</option>
                            <option>3 PHÒNG NGỦ</option>
                        </select>
                        <div><i><small style="color:#676767;">Lựa chọn bếp</small></i></div>
                        <select class="mt-2 p-2 select-dalat-concept">
                            <option>KHÔNG BẾP</option>
                            <option>CÓ BẾP</option>
                        </select>
                        <button class="add-to-cart mt-3" style="background-color:#676767; color:white;">Thêm vào
                            giỏ</button>
                    </div>
                </div>
            </div>
            <div id="prenium2" class="container tab-pane fade">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src="img/concept/product1.png" alt="..." width="100%" height="auto" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h5 style="color:#676767;">DALAT Concept - Gói cao cấp 2</h5>
                        <div><small style="color:#676767;">Gía chỉ từ:</small></div>
                        <div class="price">179,670,000₫</div>
                        <small style="color:#676767;">Gồm hơn 13 sản phẩm trọn gói nội thất cơ bản</small>
                        <div><i><small style="color:#676767;">Được điều chỉnh kích thước sản phẩm theo nhu
                                    cầu.</small></i></div>
                        <div><i><small style="color:#676767;">Được thi công trần sàn tường.</small></i></div>
                        <div><i><small style="color:#676767;">Xem thêm DALAT collection</small></i></div>
                        <div><i><small style="color:#676767;">Số lượng phòng ngủ</small></i></div>
                        <select class="mt-2 p-2 select-dalat-concept">
                            <option>1 PHÒNG NGỦ</option>
                            <option>2 PHÒNG NGỦ</option>
                            <option>3 PHÒNG NGỦ</option>
                        </select>
                        <div><i><small style="color:#676767;">Lựa chọn bếp</small></i></div>
                        <select class="mt-2 p-2 select-dalat-concept">
                            <option>KHÔNG BẾP</option>
                            <option>CÓ BẾP</option>
                        </select>
                        <button class="add-to-cart mt-3" style="background-color:#676767; color:white;">Thêm vào
                            giỏ</button>
                    </div>
                </div>
            </div>
        </div>
        <p class="mt-2">
            <img src="img/dalat-concept/detail.png" width="100%" />
        </p>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-xs-12 col-sm-5 mt-5">
                <img src="img/dalat-concept/bedroom.png" alt="..." width="100%" />
            </div>
            <div class="col-xs-12 col-sm-7 mt-5">
                <h3 class="ml-3" style="color:#676767;">Phòng bếp</h3>
                <small class="ml-3">Gồm 5 sản phẩm chính</small>
                <div class="kitchen-product-list mt-4">
                    <a href="#" class="product-block-inner" width="100%" height="100%">
                        <img src="img/dalat-concept/product-kitchen-1.png" alt="product" width=100% height="auto">
                        <img src="img/dalat-concept/product-kitchen-1-hover.png" alt="product" width=100%
                            height="auto" class="imgMix" id="product1-hover">
                    </a>
                    <a href="#" class="product-block-inner ml-3 mr-3" width="100%" height="100%">
                        <img src="img/dalat-concept/product-kitchen-2.png" alt="product" width=100% height="auto">
                        <img src="img/dalat-concept/product-kitchen-2-hover.png" alt="product" width=100%
                            height="auto" class="imgMix" id="product1-hover">
                    </a>
                    <a href="#" class="product-block-inner" width="100%" height="100%">
                        <img src="img/dalat-concept/product-kitchen-3.png" alt="product" width=100% height="auto">
                        <img src="img/dalat-concept/product-kitchen-3-hover.png" alt="product" width=100%
                            height="auto" class="imgMix" id="product1-hover">
                    </a>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-xs-12 col-sm-5">
                <img src="img/dalat-concept/leavingroom.png" alt="..." width="100%" />
            </div>
            <div class="col-xs-12 col-sm-7">
                <h3 class="ml-3" style="color:#676767;">Phòng khách</h3>
                <small class="ml-3">Nội thất cơ bản phòng khách</small>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-12 position-button-slide">
                            <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                                <div class="card">
                                    <a href="#" class="product-block-inner" width="100%" height="100%">
                                        <img src="./img/dalat-concept/product-leaving-1.png" class="card-img-top"
                                            alt="...">
                                        <img src="./img/dalat-concept/product-leaving-1-hover.png" alt="product"
                                            width=100% height="auto" class="imgMix" id="product1-hover">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#" class="product-block-inner" width="100%" height="100%">
                                        <img src="./img/dalat-concept/product-leaving-2.png" class="card-img-top"
                                            alt="...">
                                        <img src="./img/dalat-concept/product-leaving-2-hover.png" alt="product"
                                            width=100% height="auto" class="imgMix" id="product1-hover">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#" class="product-block-inner" width="100%" height="100%">
                                        <img src="./img/dalat-concept/product-leaving-3.png" class="card-img-top"
                                            alt="...">
                                        <img src="./img/dalat-concept/product-leaving-3-hover.png" alt="product"
                                            width=100% height="auto" class="imgMix" id="product1-hover">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#" class="product-block-inner" width="100%" height="100%">
                                        <img src="./img/dalat-concept/product-leaving-4.png" class="card-img-top"
                                            alt="...">
                                        <img src="./img/dalat-concept/product-leaving-4-hover.png" alt="product"
                                            width=100% height="auto" class="imgMix" id="product1-hover">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-xs-12 col-sm-5">
                <img src="img/dalat-concept/leavingroom.png" alt="..." width="100%" />
            </div>
            <div class="col-xs-12 col-sm-7">
                <h3 class="ml-3" style="color:#676767;">Phòng khách</h3>
                <small class="ml-3">Nội thất cơ bản phòng khách</small>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-12 position-button-slide">
                            <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                                <div class="card">
                                    <a href="#" class="product-block-inner" width="100%" height="100%">
                                        <img src="./img/dalat-concept/product-leaving-1.png" class="card-img-top"
                                            alt="...">
                                        <img src="./img/dalat-concept/product-leaving-1-hover.png" alt="product"
                                            width=100% height="auto" class="imgMix" id="product1-hover">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#" class="product-block-inner" width="100%" height="100%">
                                        <img src="./img/dalat-concept/product-leaving-2.png" class="card-img-top"
                                            alt="...">
                                        <img src="./img/dalat-concept/product-leaving-2-hover.png" alt="product"
                                            width=100% height="auto" class="imgMix" id="product1-hover">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#" class="product-block-inner" width="100%" height="100%">
                                        <img src="./img/dalat-concept/product-leaving-3.png" class="card-img-top"
                                            alt="...">
                                        <img src="./img/dalat-concept/product-leaving-3-hover.png" alt="product"
                                            width=100% height="auto" class="imgMix" id="product1-hover">
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#" class="product-block-inner" width="100%" height="100%">
                                        <img src="./img/dalat-concept/product-leaving-4.png" class="card-img-top"
                                            alt="...">
                                        <img src="./img/dalat-concept/product-leaving-4-hover.png" alt="product"
                                            width=100% height="auto" class="imgMix" id="product1-hover">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Carousel bottom -->
    <div class="container mt-5 share-moment">
        <div class="row d-flex align-items-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 position-button-slide">
                        <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                            <div class="card">
                                <a href="#">
                                    <img src="./img/slide/anh1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="./img/slide/anh2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="./img/slide/anh3.jpg" alt="...">
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="./img/slide/anh4.jpg" alt="...">
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="./img/slide/anh5.jpg" alt="...">
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