@extends('layouts.template')

@section('title','Giỏ hàng')

@section('content')
    @if(Session::has('cart'))
        <div class="container-fluid">
            <div class="container">
                <div class="main-content">
                    <h2 class="content">Giỏ hàng</h2>
                    <div class="background" style="background-image: url(./img/about_header_bg.webp);"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cart-form">
                <form class="cart-form" action="{{ route("checkout") }}" method="get">
                    <div class="table-responsive">
                        <table class="table cart-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="product-name">Product</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tất cả</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="product-remove">
                                            <a class="remove" href="{{ route('delete.order',['id'=>$product['item']['id']]) }}"><i class="fas fa-times-circle"></i></a>
                                        </td>
                                        <td class="product-name">
                                            <a href="">
                                                <img src="{{ $product['item']['imagePath'] }}" alt="{{ $product['item']['name'] }}" width="160px" height="160px">
                                            </a>
                                            <div style="display:inline-block;margin-left:10px;">
                                                <p><a style="color:#8f8c8c;" href="">{{ $product['item']['name'] }}</a></p>
                                            </div>
                                        </td>
                                        <td class="product-price">
                                            <p class="price">{{ number_format($product['item']['price'],-3,',',',') }}₫</p>

                                        </td>
                                        <td>
                                            <div class="quantity">
                                                <button class="minus-btn" type="button" name="button">
                                                    <i class="far fa-minus-square"></i>
                                                </button>
                                                <input type="text" class="input-1" min="0" value="{{ $product['qty'] }}" size="3">
                                                <button class="plus-btn" type="button" name="button">
                                                    <i class="far fa-plus-square"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="product-subtotal product-price">
                                            <span class="price">
                                                {{ number_format($product['price'],-3,',',',') }}₫
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="grid__item large--five-twelfths">
                                <div class="cart__note">
                                    <div class="row">
                                        <label class="col-md-12">Ghi chú đơn hàng</label>
                                        <textarea style="height: 100px; padding : 5px 10px" name="note"
                                            class="col-md-12 input-full"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 f-right">
                            <!--START TOTAL-->
                            <div class="cart-total right">
                                <div class="cart__row">
                                    <div class="grid">
                                        <div class="grid__item text-right">
                                            <p class="total margin-bottom-30">
                                                <span class="title">Tất cả</span>
                                                <span class="price">{{ number_format($totalPrice,-3,',',',') }}₫</span>

                                                <br>
                                                <span>(Chưa bao gồm phí vận chuyển)</span>
                                            </p>
                                        </div>

                                        <button class="btn btn-pay" type="submit">Thanh toán</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!--END TOTAL-->

            </div>



            </form>
            <div class="fix-coutinued"><a href="{{ route('products') }}">« Tiếp tục mua sắm</a>
            </div>
        </div>
        <script type="text/javascript">
            $('.minus-btn').on('click', function (e) {
                e.preventDefault();
                var $this = $(this);
                var $input = $this.closest('div').find('input');
                var value = parseInt($input.val());

                if (value > 1) {
                    value = value - 1;
                } else {
                    value = 0;
                }

                $input.val(value);

            });

            $('.plus-btn').on('click', function (e) {
                e.preventDefault();
                var $this = $(this);
                var $input = $this.closest('div').find('input');
                var value = parseInt($input.val());

                if (value < 100) {
                    value = value + 1;
                } else {
                    value = 100;
                }

                $input.val(value);
            });
            $(document).ready(function () {

                $('.price-2').text("$('.input-1').html()" + 'toidicode.com');
            });
        </script>


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
    @else
        <div class="container-fluid">
            <div class="container">
                <div class="main-content">
                    <h2 class="content">Giỏ hàng</h2>
                    <div class="background" style="background-image: url(./img/about_header_bg.webp);"></div>
                </div>
            </div>
            <div class="container mt-4 mb-4">Giỏ hàng của bạn hiện đang trống! <a href=" {{ route('products') }} " style="color: #9D9E99;">Hãy nhấp vào đây để mua sắm</a></div>
        </div>
    @endif
@endsection