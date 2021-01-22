@extends('layouts.template')

@section('title','Sản phẩm')

@section('content')
    <div class="container my-5">
        <a href="#" class="home">Trang chủ</a> <span class="collection">/ Sản phẩm /Chi tiết sản phẩm</span>
        @foreach ($product as $item)
            <form method="POST" action="{{ route('add.to.cart',['id' => $item->id]) }}" enctype="multipart/form-data">

                @csrf

                <div class="row my-4">
                    <div class="col-md-5 product-detail-big-img">
                        <img src="{{ URL::to('/').$item->imagePath}}" class="img-fluid" />
                    </div>
                    <div class="col-md-5">
                        <h5 style="color:#676767;">{{$item->name}}</h5>
                        <small style="color:#676767;">Bàn sofa, bàn góc</small>
                        <div><small style="color:#676767;">Gía chỉ từ:</small></div>
                        <div class="price">{{ number_format($item->price,-3,',',',') }}₫</div>
                        <div><i><small style="color:#676767;">Chất liệu : Mặt gỗ cao su sơn PU, chân gỗ tự nhiên
                        </small></i></div>
                        <div><i><small style="color:#676767;display:flex;align-items:center;">Màu sắc: <div style="width:10px;height:10px;background-color:{{$item->color}};border:1px solid black;margin-left:10px; margin-top:3px;"></div></small></i></div>
                        <button type="submit" class="add-to-cart mt-3" style="background-color:#676767; color:white;">Thêm vào
                            giỏ</button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
    <div class="container">
        <hr />
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item nav-item-dalat-concept">
                <a class="nav-link active nav-link-dalat-concept" data-toggle="tab" href="#describe">Mô tả giới
                    thiệu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-dalat-concept" data-toggle="tab" href="#guide">Hướng dẫn lắp đặt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-dalat-concept" data-toggle="tab" href="#guarantee">Bảo quản Bảo hành</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-dalat-concept" data-toggle="tab" href="#delivery">Giao hàng lắp đặt</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content mt-4">
            <div id="describe" class="container tab-pane active">
                <div class="row">
                    <div class="col-md-7">
                        <div class="product--description has-img">
                            <p><span><strong>Bàn Aileen</strong></span></p>
                            <p><span>-Chất liệu: Chân sắt sơn tĩnh điện, gỗ MDF chống ẩm</span></p>
                            <p><span>-Kích thước: H75 x D120 x W50</span></p>
                            <p><span><strong>Ghế Luxury</strong></span></p>
                            <p><span>-Chất liệu: Nhựa, nệm bọc simili, chân gỗ tự nhiên, chân sắt sơn tĩnh
                                    điện.</span></p>
                            <p><span>-Kích thước: H80/45 x D40 x W48</span></p>
                            <p><span>-Màu sắc: trắng/đen/xám/hồng</span></p>
                            <p><span><strong>Đèn Pixar</strong></span></p>
                            <p><span>-Kích thước: thân đèn 35x35, chụp đèn 15x18</span></p>
                            <p><span>-Màu sắc: trắng/đen</span></p>
                            <p><span>-Chất liệu: sắt sơn tĩnh điện</span></p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ URL::to('/') }}/img/product-detail/small-img1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div id="guide" class="container tab-pane fade">
                Hướng dẫn lắp đặt
            </div>
            <div id="guarantee" class="container tab-pane fade">
                <div class="row">
                    <div class="col-12">
                        <div class="product--description ">
                            <p><span><strong>Bảo quản:</strong></span></p>
                            <p><span>Dùng khăn ẩm với nước sạch hoặc dung dịch tẩy rửa nhẹ để làm sạch sản phẩm. Sau
                                    đó, lau khô sản phẩm bằng khăn mềm.&nbsp;</span></p>
                            <p><span>Không để sản phẩm tiếp x&uacute;c với nước hoặc nguồn nhiệt độ cao trong thời
                                    gian dài.</span></p>
                            <p><span>Tránh để sản phẩm ở nơi có độ ẩm quá cao hoặc gần những vật dễ cháy.</span></p>
                            <p><span>Không dùng các vật sắc nhọn, thô cứng chà xát sản phẩm.</span></p>
                            <p>&nbsp;</p>
                            <p><span><strong>Bảo hành:</strong></span></p>
                            <p><span><em>Thời hạn bảo hành&nbsp;</em>của Make My Home là 12 tháng đối các sản phẩm
                                    nội thất, và 3 tháng đối với các sản phẩm đ&egrave;n và đồng hồ.</span></p>
                            <p><span>Bảo hành cho các sản phẩm có lỗi nguyên vật liệu hay lỗi từ nhà sản xuất (như
                                    móp, méo, cong vênh các chi tiết sản phẩm, bong tróc sơn,...). Hoặc các sản phẩm
                                    bị bể vỡ/ trầy xước/ biến dạng trong quá trình vận chuyển.</span></p>
                            <p><span>Không bảo hành cho các sản phẩm hư hỏng trong quá trình quý khách sử dụng do sử
                                    dụng không cẩn thận, bảo quản và vệ sinh không đ&uacute;ng cách. Cũng như sản
                                    phẩm bị các hao m&ograve;n thông thường (như phai mờ, rỉ s&eacute;t do trầy
                                    xước, lỏng ốc v&iacute;t sau một khoảng thời gian...).</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="delivery" class="container tab-pane fade">
                <div class="row">
                    <div class="col-12">
                        <div class="product--description ">
                            <p><span><strong>Bảo quản:</strong></span></p>
                            <p><span>Dùng khăn ẩm với nước sạch hoặc dung dịch tẩy rửa nhẹ để làm sạch sản phẩm. Sau
                                    đó, lau khô sản phẩm bằng khăn mềm.&nbsp;</span></p>
                            <p><span>Không để sản phẩm tiếp x&uacute;c với nước hoặc nguồn nhiệt độ cao trong thời
                                    gian dài.</span></p>
                            <p><span>Tránh để sản phẩm ở nơi có độ ẩm quá cao hoặc gần những vật dễ cháy.</span></p>
                            <p><span>Không dùng các vật sắc nhọn, thô cứng chà xát sản phẩm.</span></p>
                            <p>&nbsp;</p>
                            <p><span><strong>Bảo hành:</strong></span></p>
                            <p><span><em>Thời hạn bảo hành&nbsp;</em>của Make My Home là 12 tháng đối các sản phẩm
                                    nội thất, và 3 tháng đối với các sản phẩm đ&egrave;n và đồng hồ.</span></p>
                            <p><span>Bảo hành cho các sản phẩm có lỗi nguyên vật liệu hay lỗi từ nhà sản xuất (như
                                    móp, méo, cong vênh các chi tiết sản phẩm, bong tróc sơn,...). Hoặc các sản phẩm
                                    bị bể vỡ/ trầy xước/ biến dạng trong quá trình vận chuyển.</span></p>
                            <p><span>Không bảo hành cho các sản phẩm hư hỏng trong quá trình quý khách sử dụng do sử
                                    dụng không cẩn thận, bảo quản và vệ sinh không đ&uacute;ng cách. Cũng như sản
                                    phẩm bị các hao m&ograve;n thông thường (như phai mờ, rỉ s&eacute;t do trầy
                                    xước, lỏng ốc v&iacute;t sau một khoảng thời gian...).</span></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12 my-5">
            <h1 class="title-products">Sản phẩm có liên quan</h1>
            <div class="row">
                <div class="col-sm-12 position-button-slide">
                    <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                        <div class="product product-block">
                            <img src="{{ URL::to('/') }}/img/bed10-10.webp" alt="...">
                            <img src="{{ URL::to('/')}}/img/bed10.webp" class="imgMix" alt="...">
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
                            <img src="{{ URL::to('/')}}/img/bed9.webp" alt="...">
                            <img src="{{ URL::to('/')}}/img/bed9-9.webp" class="imgMix" alt="...">
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
                            <img src="{{ URL::to('/')}}/img/bed8-8.webp" alt="...">
                            <img src="{{ URL::to('/')}}/img/bed8.webp" class="imgMix" alt="...">
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
                            <img src="{{ URL::to('/')}}/img/bed7.webp" alt="...">
                            <img src="{{ URL::to('/')}}/img/bed7-7.webp" class="imgMix" alt="...">
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
    <!-- Carousel bottom -->
    <div class="container mt-5 share-moment mt-5">
        <div class="row d-flex align-items-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 position-button-slide">
                        <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                            <div class="card">
                                <a href="#">
                                    <img src="{{ URL::to('/')}}/img/slide/anh1.jpg" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="{{ URL::to('/')}}/img/slide/anh2.jpg" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="{{ URL::to('/')}}/img/slide/anh3.jpg" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="{{ URL::to('/')}}/img/slide/anh4.jpg" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="{{ URL::to('/')}}/img/slide/anh5.jpg" class="card-img-top" alt="...">
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