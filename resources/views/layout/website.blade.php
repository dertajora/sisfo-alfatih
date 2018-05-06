<!DOCTYPE html>
<html lang="en">
<head>

<title>SD Karakter Al-Fatiih</title>
    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="SD Al-Fatiih - Internalisasi Karakter Kepahlawanan dalam Akhlak Kepribadian Peserta Didik">
<meta name="keywords" content="sekolah, sd karakter, sd it, sd islam, sd bintan, sekolah dasar,tanjungpandan">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/course')}}/styles/bootstrap4/bootstrap.min.css">
<link href="{{ URL::asset('public/course')}}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/course')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/course')}}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/course')}}/plugins/OwlCarousel2-2.2.1/animate.css">

@yield('style_specific')

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="{{ URL::asset('public/course')}}/images/logo.png" alt="">
					<span>SD Al-Fatiih</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="{{url('/')}}">beranda</a></li>
						<li class="main_nav_item"><a href="#">Galeri</a></li>
						
						{{-- <li class="main_nav_item"><a href="elements.html">elements</a></li> --}}
						<li class="main_nav_item"><a href="{{url('/news')}}">berita</a></li>
						<li class="main_nav_item"><a href="{{url('/about')}}">tentang kami</a></li>
						
					</ul>
				</div>
			</nav>
		</div>
		<a href="#">
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			{{-- <img src="{{ URL::asset('public/course')}}/images/phone-call.svg" alt=""> --}}
			<span>REGISTRASI</span>
		</div></a>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="{{url('/')}}">Beranda</a></li>
					<li class="menu_item menu_mm"><a href="#">Galeri</a></li>
					<li class="menu_item menu_mm"><a href="{{url('/news')}}">Berita</a></li>
					<li class="menu_item menu_mm"><a href="{{url('/about')}}">Tentang Kami</a></li>
					<li class="menu_item menu_mm"><a href="#">Registrasi</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	@yield('content')

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			
			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-6 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
								<span>SD Karakter Al-Fatiih</span>
							</div>
						</div>

						<p class="footer_about_text">Pendidikan Karakter : Serial Kepahlawanan "Becoming A Hero". Internalisasi Karakter Kepahlawanan dalam Akhlak Kepribadian Peserta Didik.</p>

					</div>

					<!-- Footer Column - Menu -->

					

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-2 footer_col">
						
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-4 footer_col">
						<div class="footer_column_title">Kontak</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{ URL::asset('public/course')}}/images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Jl. Merpati Kp. Sidojadi km 13, RT 3 / RW 9<br>
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									Kel. Batu IX, Komplek Ruko No 2
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{ URL::asset('public/course')}}/images/phone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0812-2812-5872
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{ URL::asset('public/course')}}/images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>yayasanmuhammadalfatih@gmail.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="{{ URL::asset('public/course')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{ URL::asset('public/course')}}/styles/bootstrap4/popper.js"></script>
<script src="{{ URL::asset('public/course')}}/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{ URL::asset('public/course')}}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{ URL::asset('public/course')}}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{ URL::asset('public/course')}}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{ URL::asset('public/course')}}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{ URL::asset('public/course')}}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{ URL::asset('public/course')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{ URL::asset('public/course')}}/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="{{ URL::asset('public/course')}}/plugins/easing/easing.js"></script>
<script src="{{ URL::asset('public/course')}}/js/custom.js"></script>

@yield('script')
</body>
</html>