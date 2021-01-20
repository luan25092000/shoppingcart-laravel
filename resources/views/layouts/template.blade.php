<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	{{-- libraries --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    {{-- style --}}
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
	<link rel="stylesheet" href="{{asset('css/pc.css')}}" media="all" />
	<link rel="stylesheet" href="{{asset('css/tablet.css')}}" media="all and (max-width:1023px) and (min-width:768px)" />
	<link rel="stylesheet" href="{{asset('css/mobile.css')}}" media="all and (max-width:767px)" />
	<link rel="shortcut icon" type="image/png" href="./img/favicon.ico" />
	<title>@yield('title')</title>
</head>

<body>
	<header>
		<div class="container-fluid menu">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<a href="./">
							<img src="./img/logo.webp" alt="" />
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
							<li class="nav-item dropdown"> <a class="nav-link" href="./products"
									id="navbarDropdown" role="button" data-toggle="dropdown">
									Sản phẩm
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown" id="sub-dropdown"> <a class="dropdown-item"
											href="./product">BÀN -
											tables
										</a>
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
											href="./product">SOFA -
											sofas</a>
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
											href="./product">CHĂN, GA,
											GỐI - bedding</a>
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
											href="./product">ĐỒ GIA
											DỤNG - household goods</a>
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
											href="./product">KỆ, TỦ -
											shelf units, cabinets</a>
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
											href="./product">SẢN PHẨM
											DỆT MAY - home</a>
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
											href="./product">ẤN PHẨM -
											publications</a>
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
										href="./product">BỘ SƯU TẬP -
										collections</a>
									<ul class="dropdown-menu" id="sub-dropdown-menu">
										<li><a class="dropdown-item" href="./collection">Bộ sưu tập DALAT</a>
										</li>
										<li><a class="dropdown-item" href="./collection">Bộ sưu tập JOHY</a>
										</li>
										<li><a class="dropdown-item" href="./collection">Bộ sưu tập HANO</a>
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
						<form class="form-inline my-2 my-lg-0 text-right icon-bootstrap-in-menu">
							<input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm sản phẩm..."
								aria-label="Search">
							<a href="{{ route('cart') }}">
								<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-bag"
									fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd"
										d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
									<path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
								</svg>
								<span class="qty-order">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
							</a>
							<a href="./sign-in">
								<svg width="1.5em" height="1.5em" class="svg-icon" viewBox="0 0 20 20">
									<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
								</svg>
							</a>
						</form>
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
					<span>Contact</span>
					<p>Công ty TNHH Kiến trúc và Nội thất Make My Home <br>
						GPĐKKD số 0314329518 do Sở KHĐT TP.HCM cấp ngày 03/04/2017 <br>
						97-99 Cộng Hoà, lầu 3, phường 4, quận Tân Bình, Hồ Chí Minh <br>
						ĐT: 028 6267 6466 - ‭0866757758 <br>
						Email: support@makemyhomevn.com</p>
					<a href="#" class="icon-footer"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="icon-footer"><i class="fab fa-instagram"></i></a>
					<a href="#" class="icon-footer"><i class="fab fa-youtube"></i></i></a>
					<a href="#" class="icon-footer"><i class="fab fa-twitter"></i></i></a>
				</div>
				<div class="col-md-8" style="font-size : 30px;color: #7D6968">
					minimal living
				</div>
				<div class="col-md-4">
					<a href="#"><img src="./img/logo_bct.webp" alt=""></a>
					<a href="#"><img src="./img/dmca_protected_16_120.png" alt=""></a>
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
</body>

</html>