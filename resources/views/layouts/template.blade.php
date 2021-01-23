<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	{{-- libraries --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- style --}}
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
	<link rel="stylesheet" href="{{asset('css/pc.css')}}" media="all" />
	<link rel="stylesheet" href="{{asset('css/tablet.css')}}" media="all and (max-width:1023px) and (min-width:768px)" />
	<link rel="stylesheet" href="{{asset('css/mobile.css')}}" media="all and (max-width:767px)" />
	<link rel="shortcut icon" type="image/png" href="{{ URL::to('/') }}/img/favicon.ico" />
	<title>@yield('title')</title>
</head>

<body>
	<header>
		<div class="container-fluid menu mb-3">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<a href="{{ route('index') }}">
							<img src="{{ URL::to('/') }}/img/logo.webp" alt="" />
						</a>
					</div>
				</div>
				<div class="account">
					@if(Auth::check())
						<a href="{{ route('user.profile') }}">Thông tin đăng nhập</a>
						<a href="./logout">Đăng xuất</a>
					@else
						<a href="./sign-in">Đăng nhập</a>
						<a href="./sign-up">Đăng ký</a>
					@endif
				</div>
				<nav class="navbar navbar-expand-lg navbar-light bg-transparent nav-custom">
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto navbar-nav-custom ml-auto">
							<li class="nav-item active-button"> <a class="nav-link" href="./">Trang chủ</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="./about">Giới thiệu</a>
							</li>
							<li class="nav-item dropdown"> <a class="nav-link" href="{{ route('products') }}"
									id="navbarDropdown" role="button" data-toggle="dropdown">
									Sản phẩm
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./product">BÀN -
											tables
										</a>
										<ul class="dropdown-menu" id="sub-dropdown-menu">
											<li><a class="dropdown-item" href="./product-detail">BÀN ĂN</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">BỘ BÀN ĂN</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">BÀN LÀM VIỆC</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">BÀN SOFA, BÀN GÓC</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">BÀN CAFE</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">BÀN TRANG ĐIỂM</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">CHÂN & MẶT BÀN</a>
											</li>
										</ul>
									</li>
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./product">SOFA -
											sofas</a>
										<ul class="dropdown-menu" id="sub-dropdown-menu">
											<li><a class="dropdown-item" href="./product-detail">SOFA BĂNG</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">SOFA GÓC</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">SOFA GIƯỜNG</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">GHẾ ĐÔN, GHẾ BĂNG</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">GHẾ BÀNH, THƯ GIÃN</a>
											</li>
										</ul>
									</li>
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./product">CHĂN, GA,
											GỐI - bedding</a>
										<ul class="dropdown-menu" id="sub-dropdown-menu">
											<li><a class="dropdown-item" href="./product-detail">VỎ GỐI</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">VỎ CHĂN</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">GA GIƯỜNG</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">GỐI TRANG TRÍ</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">CHĂN TRANG TRÍ</a>
											</li>
										</ul>
									</li>
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./product">ĐỒ GIA
											DỤNG - household goods</a>
										<ul class="dropdown-menu" id="sub-dropdown-menu">
											<li><a class="dropdown-item" href="./product-detail">RÈM</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">THÙNG RÁC</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">KỆ BẾP</a>
											</li>
										</ul>
									</li>
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./product">KỆ, TỦ -
											shelf units, cabinets</a>
										<ul class="dropdown-menu" id="sub-dropdown-menu">
											<li><a class="dropdown-item" href="./product-detail">KỆ,TỦ LƯU TRỮ</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">KỆ,TỦ TV</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">KỆ,TỦ GIÀY</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">KỆ,TỦ QUẦN ÁO</a>
											</li>
										</ul>
									</li>
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./product">GHẾ -
											chairs</a>
										<ul class="dropdown-menu" id="sub-dropdown-menu">
											<li><a class="dropdown-item" href="./product-detail">Bàn làm việc</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">Bàn làm việc</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">Bàn làm việc</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">Bàn làm việc</a>
											</li>
										</ul>
									</li>
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./product">ĐÈN -
											lamps</a>
										<ul class="dropdown-menu" id="sub-dropdown-menu">
											<li><a class="dropdown-item" href="./product-detail">ĐÈN SÀN</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">ĐÈN BÀN</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">ĐÈN TRANG TRÍ</a>
											</li>
										</ul>
									</li>
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./product">SẢN PHẨM
											DỆT MAY - home</a>
										<ul class="dropdown-menu" id="sub-dropdown-menu">
											<li><a class="dropdown-item" href="./product-detail">THẢM</a>
											</li>
											<li><a class="dropdown-item" href="./product-detail">NỆM</a>
											</li>
										</ul>
									</li>
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./product">ẤN PHẨM -
											publications</a>
									</li>
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
										href="./product">BỘ SƯU TẬP -
										collections</a>
									<ul class="dropdown-menu" id="sub-dropdown-menu">
										<li><a class="dropdown-item" href="./collection">BỘ SƯU TẬP DALAT</a>
										</li>
										<li><a class="dropdown-item" href="./collection">BỘ SƯU TẬP JOHY</a>
										</li>
										<li><a class="dropdown-item" href="./collection">BỘ SƯU TẬP HANO</a>
										</li>
									</ul>
								</li>
								</ul>
							</li>
							<li class="nav-item"> <a class="nav-link" href="./concept">M.Concept</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="./design">Thiết kế & Thi
									Công</a>
							</li>
							<li class="nav-item dropdown"> <a class="nav-link" href="./news" id="navbarDropdown"
									role="button" data-toggle="dropdown">
									Tin tức
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./news-child">Khuyến mãi</a>
									</li>
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./news-child">Thành viên ưu đãi</a>
									</li>
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./news-child">Tin tức</a>
									</li>
								</ul>
							</li>
							<li class="nav-item"> <a class="nav-link" href="./sales">Ưu Đãi</a>
							</li>
						</ul>
						<div class="search-container">
							<form class="form-inline my-2 my-lg-0 text-right icon-bootstrap-in-menu" method = "get" action = "{{ route('search') }}" enctype="multipart/form-data">

								@csrf

								<input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm sản phẩm..." name="key"
									aria-label="Search">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<a href="{{ route('cart') }}">
							<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-bag"
								fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: black;">
								<path fill-rule="evenodd"
									d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
								<path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
							</svg>
							<span class="qty-order">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
						</a>
					</div>
				</nav>
			</div>
		</div>
    </header>
    @yield('content')
	<footer>
		<div class="container footer">
			<div class="row">
				<div class="col-md-3">
					<span>About</span>
					<a href="#">
						<p>TUYỂN DỤNG</p>
					</a>
					<a href="./contact">
						<p>LIÊN HỆ</p>
					</a>
				</div>
				<div class="col-md-3">
					<span>Products</span>
					<a href="#">
						<p>BÀN - tables</p>
					</a>
					<a href="#">
						<p>SOFA - sofas</p>
					</a>
					<a href="#">
						<p>CHĂN, GA, GỐI - bedding
						</p>
					</a>
					<a href="#">
						<p>ĐỒ GIA DỤNG - household goods</p>
					</a>
					<a href="#">
						<p>KỆ, TỦ - shelf units, cabinets</p>
					</a>
					<a href="#">
						<p>GHẾ - chairs</p>
					</a>
					<a href="#">
						<p>ĐÈN - lamps</p>
					</a>
					<a href="#">
						<p>SẢN PHẨM DỆT MAY - home</p>
					</a>
					<a href="#">
						<p>ĐÈN - lamps</p>
					</a>
				</div>
				<div class="col-md-3">
					<span>Policy</span>
					<a href="#">
						<p>Chính sách và quy định</p>
					</a>
					<a href="#">
						<p>Bảo mật</p>
					</a>
				</div>
				<div class="col-md-3">
					<a href="{{ route('address') }}">
						<span>Contact</span>
						<p>Công ty TNHH Kiến trúc và Nội thất Ánh Trinh <br>
							GPĐKKD số 0314329518 do Sở KHĐT TP.HCM cấp ngày 03/04/2017 <br>
							740/5D Âu Cơ, P.14, Q.Tân Bình, TP.HCM <br>
							ĐT: 089 810 3236 - 0908552259 <br>
							Email: nguyenhuuluan17@gmail.com</p>
						<a href="#" class="icon-footer"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="icon-footer"><i class="fab fa-instagram"></i></a>
						<a href="#" class="icon-footer"><i class="fab fa-youtube"></i></i></a>
						<a href="#" class="icon-footer"><i class="fab fa-twitter"></i></i></a>
					</a>
				</div>
				<div class="col-md-8" style="font-size : 30px;color: #7D6968">
					minimal living
				</div>
				<div class="col-md-4">
					<a href="#"><img src="{{ URL::to('/') }}/img/logo_bct.webp" alt=""></a>
					<a href="#"><img src="{{ URL::to('/') }}/img/dmca_protected_16_120.png" alt=""></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  xfbml            : true,
		  version          : 'v9.0'
		});
	  };

	  (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your Chat Plugin code -->
	<div class="fb-customerchat"
	  attribution=setup_tool
	  page_id="103558981631961"
logged_in_greeting="Mình là Luân, mình có thể giúp gì được cho bạn!"
logged_out_greeting="Mình là Luân, mình có thể giúp gì được cho bạn!">
	</div>
	{{-- libraries --}}
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script src="./js/owl.carousel.min.js"></script>
	<script src="./js/script.js"></script>
	<script src="./js/dropdown.js"></script>
	<script src="https://js.stripe.com/v3/"></script>
	<script src="./js/checkout.js"></script>
</body>

</html>