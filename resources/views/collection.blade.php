@extends('layouts.template')

@section('title','Bộ sưu tập')

@section('content')
    <div class="container">
        <!-- Phần giới thiệu sản phẩm -->
        <div class="container-inner-1">
            <a href="{{ route('index') }}" class="home">Trang chủ</a> <span class="collection">/ DALAT collection</span>
            <h4 class="title mt-2">DALAT collection</h4>
            <img src="img/picture/picture1.png" alt="picture" class="responsive">
            <div class="paragraph">
                <p>
                    Với nguồn cảm hứng bất tận từ Đà Lạt, đội ngũ thiết kế tại Make My Home đã mang những gam màu
                    nguyên bản nhất của vùng đất cao nguyên này vào bộ sưu tập mới nhất của mình - DALAT collection.
                </p>
                <p>
                    Từng mảnh ghép trong bộ sưu tập DALAT đều phảng phất bóng dáng một vùng đất tao nhã, xinh đẹp,
                    ôn hoà. Sự kết hợp hài hoà của 2 tông màu trắng - gỗ là điểm nổi bật, điểm xuyết trên đó vài
                    đường cong uyển chuyển mang cảm giác vừa mềm mại, nhẹ nhàng, vừa
                    gần gũi, ấm cúng. Đâu đó, bạn sẽ bắt gặp đôi nét kín đáo như con người nơi đây qua hình ảnh
                    những chiếc ngăn kéo & tay nắm, hay bóng dáng một vùng cao nguyên không bằng phẳng được cách
                    điệu tầng lớp như một vòng pano trên bề mặt
                    sản phẩm không lẫn vào đâu được.
                </p>
                <p>
                    Đến với bộ sưu tập DALAT, bạn sẽ cảm nhận được từng hơi thở của xứ thơ mộng Langbiang trong
                    chính căn nhà của mình, một nét bình yên dịu dàng, nhưng vẫn vẹn nguyên sự nguyên sơ quyến rũ.
                </p>
            </div>
        </div>
        <!-- Phần sản phẩm -->
        <div class="container-inner-2">
            <div class="massAction-block">
                <div class="massAction mb-4">
                    <div class="column">
                        <div class="massPrice">Giá<i class="fas fa-plus"></i></div>
                        <div class="filterPrice">
                            <div><input type="checkbox" name="less-one-milion" /> <span class="effect">Dưới 1
                                    triệu</span></div>
                            <div><input type="checkbox" name="from-one-to-two" /> <span class="effect">Từ 1 - 2
                                    triệu</span></div>
                            <div><input type="checkbox" name="from-two-to-three" /> <span class="effect">Từ 2 - 3
                                    triệu</span></div>
                            <div><input type="checkbox" name="from-three-to-five" /> <span class="effect">Từ 3 - 5
                                    triệu</span></div>
                            <div><input type="checkbox" name="greater-than-five" /> <span class="effect">Lớn hơn 5
                                    triệu</span></div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="massColor">Màu sắc<i class="fas fa-plus"></i></div>
                        <div class="filterColor">
                            <div><input type="checkbox" name="blue" /> <span class="effect">Xanh ciment</span></div>
                            <div><input type="checkbox" name="brown" /> <span class="effect">Nâu</span></div>
                            <div><input type="checkbox" name="white" /> <span class="effect">Trắng</span></div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="massFilter">Loại sản phẩm<i class="fas fa-plus"></i></div>
                        <div class="filterType">
                            <div><input type="checkbox" name="blue" /> <span class="effect">Khác</span></div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="sort">
                        <div class="mr-2 quantity">15 sản phẩm</div>
                        <div class="massSort">Sort by<i class="fas fa-angle-down"></i></div>
                    </div>
                    <div class="filterMultiple">
                        <div class="select">Sort by</div>
                        <div class="select">Mới nhất</div>
                        <div class="select">Giá: Tăng dần</div>
                        <div class="select">Giá: Giảm dần</div>
                        <div class="select">Tên: A-Z</div>
                        <div class="select">Tên: Z-A</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Line 1 -->
                <div class="col-sm-3 col-xs-6 col-md-3 mb-4 product-block">
                    <a href="#" class="product-block-inner" width="255px" height="255px">
                        <img src="img/product/product1.png" alt="product" width=100% height="auto">
                        <img src="img/product/product1-hover.png" alt="product" width=100% height="auto"
                            class="imgMix" id="product1-hover">
                    </a>
                    <div class="detail">
                        <i class="far fa-eye" data-toggle="modal" data-target="#detail-modal-1"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="name">Bộ bàn ăn DALAT-MITA</div>
                    <div class="subname">Bàn DALAT và 4 ghế MITA nhạt</div>
                    <div class="price">9,460,000₫<del style="font-size:0.8rem;">9,860,000₫</del></div>
                </div>
                <div class="col-sm-3 col-xs-6 col-md-3 product-block">
                    <a href="#" class="product-block-inner" width="255px" height="170px">
                        <img src="img/product/product2.png" alt="product" width=100% height=100%>
                        <img src="img/product/none.png" alt="product" width=100% height=100% class="imgMix">
                    </a>
                    <div class="name">DALAT Concept - Gói cao...</div>
                    <div class="detail">
                        <i class="far fa-eye" data-toggle="modal" data-target="#detail-modal-2"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Giá chỉ từ:</div>
                    <div class="price">179,670,000₫</div>
                </div>
                <div class="col-sm-3 col-xs-6 col-md-3 product-block">
                    <a href="#" class="product-block-inner" width="255px" height="255px">
                        <img src="img/product/product2.png" alt="product" width=100% height=100%>
                        <img src="img/product/none.png" alt="product" width=100% height=100% class="imgMix">
                    </a>
                    <div class="name">DALAT Concept - Gói cao...</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-3" data-toggle="modal" data-target="#detail-modal-3"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Gói nội tiêu chuẩn - giá chỉ từ:</div>
                    <div class="price">101,690,000₫</div>
                </div>
                <div class="col-sm-3 col-xs-6 col-md-3 product-block">
                    <a href="#" class="product-block-inner" width="255px" height="255px">
                        <img src="img/product/product3.png" alt="product" width=100% height=100%>
                        <img src="img/product/none.png" alt="product" width=100% height=100% class="imgMix">
                    </a>
                    <div class="name">DALAT Concept - Gói cao...</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-4" data-toggle="modal" data-target="#detail-modal-2"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Gói nội thất cao cấp 1 - giá chỉ từ:</div>
                    <div class="price">101,160,000₫</div>
                </div>
                <!-- Line 2 -->
                <div class="col-sm-3 col-xs-6 col-md-3 product-block">
                    <a href="#" class="product-block-inner" width="255px" height="255px">
                        <img src="img/product/product4.png" alt="product" width=100% height=100%>
                        <img src="img/product/none.png" alt="product" width=100% height=100% class="imgMix">
                    </a>
                    <div class="name">DALAT Concept - Gói cơ bản</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-5" data-toggle="modal" data-target="#detail-modal-4"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Gói nội thất cơ bản - giá chỉ từ:</div>
                    <div class="price">56,670,000₫</div>
                </div>
                <div class="col-sm-3 col-xs-6 col-md-3  mb-4 product-block">
                    <a href="#" class="product-block-inner" width="255px" height="255px">
                        <img src="img/product/product5.png" alt="product" width=100% height=100%>
                        <img src="img/product/product5-hover.png" alt="product" width=100% height=100%
                            class="imgMix">
                    </a>
                    <div class="name">DALAT</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-6" data-toggle="modal" data-target="#detail-modal-5"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Bàn ăn</div>
                    <div class="price">3,900,000₫</div>
                </div>
                <div class="col-sm-3 col-xs-6 col-md-3 product-block">
                    <a href="#" class="product-block-inner" width="100%" height="100%">
                        <img src="img/product/product6.png" alt="product" width=100% height=auto>
                        <img src="img/product/product6-hover.png" alt="product" width=100% height=auto
                            class="imgMix">
                    </a>
                    <div class="name">DALAT</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-7" data-toggle="modal" data-target="#detail-modal-6"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Hệ tủ quần áo, 240*220cm</div>
                    <div class="price">18,500,000₫</div>
                </div>
                <div class="col-sm-3 col-xs-6 col-md-3 product-block">
                    <a href="#" class="product-block-inner" width="100%" height="100%">
                        <img src="img/product/product7.png" alt="product" width=100% height=100%>
                        <img src="img/product/product7-hover.png" alt="product" width=100% height=100%
                            class="imgMix">
                    </a>
                    <div class="name">DALAT</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-8" data-toggle="modal" data-target="#detail-modal-7"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Hệ tủ quần áo, 180*220cm</div>
                    <div class="price">14,000,000₫</del>
                    </div>
                </div>
                <!-- Line 3 -->
                <div class="col-sm-3 col-xs-6 col-md-3 mb-4 product-block">
                    <a href="#" class="product-block-inner" width="100%" height="100%">
                        <img src="img/product/product8.png" alt="product" width=100% height=100%>
                        <img src="img/product/product8-hover.png" alt="product" width=100% height=100%
                            class="imgMix">
                    </a>
                    <div class="name">DALAT</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-9" data-toggle="modal" data-target="#detail-modal-8"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Tủ quần áo, 60*220cm</div>
                    <div class="price">4,500,000₫</del>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-md-3 product-block">
                    <a href="#" class="product-block-inner" width="255px" height="255px">
                        <img src="img/product/product9.png" alt="product" width=100% height=100%>
                        <img src="img/product/product9-hover.png" alt="product" width=100% height=100%
                            class="imgMix">
                    </a>
                    <div class="name">DALAT</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-10" data-toggle="modal" data-target="#detail-modal-9"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Tủ quần áo, 120*220cm</div>
                    <div class="price">9,500,000₫</del>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-md-3 product-block">
                    <a href="#" class="product-block-inner" width="100%" height="100%">
                        <img src="img/product/product10.png" alt="product" width=100% height=100%>
                        <img src="img/product/product10-hover.png" alt="product" width=100% height=100%
                            class="imgMix">
                    </a>
                    <div class="name">DALAT</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-11" data-toggle="modal" data-target="#detail-modal-10"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Tủ giày</div>
                    <div class="price">6,000,000₫</del>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-md-3 product-block">
                    <a href="#" class="product-block-inner" width="100%" height="100%">
                        <img src="img/product/product11.png" alt="product" width=100% height=100%>
                        <img src="img/product/product11-hover.png" alt="product" width=100% height=100%
                            class="imgMix">
                    </a>
                    <div class="name">DALAT</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-12" data-toggle="modal" data-target="#detail-modal-11"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Gói nội thất cao cấp 1 - giá chỉ từ:</div>
                    <div class="price">101,160,000₫</del>
                    </div>
                </div>
                <!-- Line 4 -->
                <div class="col-sm-3 col-xs-6 col-md-3 mb-4 product-block">
                    <a href="#" class="product-block-inner" width="100%" height="100%">
                        <img src="img/product/product12.png" alt="product" width=100% height=100%>
                        <img src="img/product/product12-hover.png" alt="product" width=100% height=100%
                            class="imgMix">
                    </a>
                    <div class="name">DALAT</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-13" data-toggle="modal" data-target="#detail-modal-12"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Tủ TV</div>
                    <div class="price">6,500,000₫</div>
                </div>
                <div class="col-sm-3 col-xs-6 col-md-3 product-block">
                    <a href="#" class="product-block-inner" width="100%" height="100%">
                        <img src="img/product/product13.png" alt="product" width=100% height=100%>
                        <img src="img/product/product13-hover.png" alt="product" width=100% height=100%
                            class="imgMix">
                    </a>
                    <div class="name">DALAT</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-14" data-toggle="modal" data-target="#detail-modal-13"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Tủ lưu trữ, tủ giày</div>
                    <div class="price">6,500,000₫</del>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-md-3 product-block">
                    <a href="#" class="product-block-inner" width="100%" height="100%">
                        <img src="img/product/product14.png" alt="product" width=100% height=100%>
                        <img src="img/product/product14-hover.png" alt="product" width=100% height=100%
                            class="imgMix">
                    </a>
                    <div class="name">DALAT</div>
                    <div class="detail">
                        <i class="far fa-eye" id="detail-15" data-toggle="modal" data-target="#detail-modal-14"></i>
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="subname">Bàn trang điểm, bàn làm việc</div>
                    <div class="price">3,500,000₫</del>
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