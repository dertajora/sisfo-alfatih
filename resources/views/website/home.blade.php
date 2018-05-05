	
@extends('layout.website')

@section("style_specific")
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/course')}}/styles/teachers_styles.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/course')}}/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/course')}}/styles/responsive.css">


@endsection

@section('content')	
	<!-- Home -->

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url({{ URL::asset('public/course')}}/images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Sekolah Karakter <br>Sekolah Dasar Al-Fatiih</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url({{ URL::asset('public/course')}}/images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Pendaftaran telah dibuka!</h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="{{ URL::asset('public/course')}}/images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Online Monitoring</h2>
								<a href="{{url('/login')}}" class="hero_box_link">masuk</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="{{ URL::asset('public/course')}}/images/books.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Program Unggulan</h2>
								<a href="{{url('/program')}}" class="hero_box_link">lihat detail</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="{{ URL::asset('public/course')}}/images/professor.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Staff Pendidik</h2>
								<a href="{{url('/staff')}}" class="hero_box_link">lihat detail</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Program Unggulan</h1>
						<br>
						<p class="register_text" style="color:black">Untuk menghasilkan output yang berkualitas, kami menyelenggarakan kurikulum terpadu antara Kurikulum Nasional , Kurikulum Jaringan Sekolah Islam Terpadu (JSIT) dan Kurikulum Al-Fatiih dengan program unggulan sebagai berikut :</p>
					</div>
				</div>
			

			</div>

			<div class="row public/course_boxes">
				
				<!-- Popular public/course Item -->
				<div class="col-lg-4 public/course_box">
					<div class="card">
						<img class="card-img-top" src="{{ URL::asset('public/course')}}/images/course_3.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title" style="color:black"><a>Pendidikan Karakter</a></div>
							<div class="card-text">Kalimat tambahan</div>
							<br><br>
						</div>
						
					</div>
				</div>

				<!-- Popular public/course Item -->
				<div class="col-lg-4 public/course_box">
					<div class="card">
						<img class="card-img-top" src="{{ URL::asset('public/course')}}/images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title" style="color:black"><a>Al-Quran</a></div>
							<div class="card-text">Tahsin, Tahfidz & Ilmu Tajwid</div>
							<br><br>
						</div>
						
					</div>
				</div>

				<!-- Popular public/course Item -->
				<div class="col-lg-4 public/course_box">
					<div class="card">
						<img class="card-img-top" src="{{ URL::asset('public/course')}}/images/course_2.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title" style="color:black"><a>Language Class</a></div>
							<div class="card-text">Bahasa Arab & Inggris</div>
							<br><br>
						</div>
						
					</div>
				</div>
			
			</div>

			<center>
				<div class="become_button text-center trans_200">
					<a href="{{url('/program')}}">Lihat Detail</a>
				</div>
			</center>
			
		</div>		
	</div>

	<!-- Muqoddimah -->

	<div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url({{ URL::asset('public/course')}}/images/testimonials_background.jpg)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Muqoddimah</h1>
					</div>
				</div>
			</div>

			<div class="row">
				
				<div class="col-lg-10 offset-lg-1">
					<br><br>
					<p class="testimonials_text text-center">Sekolah Karakter SD AL-Fatiih adalah Lembaga Pendidikan yang didirikan oleh Yayasan Muhammad Al-Fatiih Tanjungpinang. Berdasarkan Visi dan Misinya, lembaga ini memiliki tujuan untuk mendidik karakter peserta didik semenjak dini sehingga dapat menjadi generasi yang Berkarakter TSABIT (Tangguh & Mandiri / Syukur / Amanah / Bermanfaat / Istiqomah / Tertib & Disiplin) serta memiliki Aqidah yang lurus.</p>
				</div>
			</div>

		</div>
	</div>

	

	<!-- Services -->

	<div class="services page_section">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Nilai-nilai Al-Fatiih</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{ URL::asset('public/course')}}/images/earth-globe.svg" alt="">
					</div>
					<h3>Tangguh dan Mandiri</h3>
					<p>Kami akan bla bla bla</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{ URL::asset('public/course')}}/images/exam.svg" alt="">
					</div>
					<h3>Syukur</h3>
					<p>Kami akan bla bla bla</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{ URL::asset('public/course')}}/images/books.svg" alt="">
					</div>
					<h3>Amanah</h3>
					<p>Kami akan bla bla bla</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{ URL::asset('public/course')}}/images/professor.svg" alt="">
					</div>
					<h3>Bermanfaat</h3>
					<p>Kami akan bla bla bla</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{ URL::asset('public/course')}}/images/blackboard.svg" alt="">
					</div>
					<h3>Istiqomah</h3>
					<p>Kami akan bla bla bla</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{ URL::asset('public/course')}}/images/mortarboard.svg" alt="">
					</div>
					<h3>Tertib dan Disiplin</h3>
					<p>Kami akan bla bla bla</p>
				</div>

			</div>
		</div>
	</div>

	<!-- Visi Misi -->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Visi</h1>
							<p class="register_text">Menjadi Sekolah Islam Yang Unggul dan Inovatif Untuk Membentuk Peserta Didik Menjadi Generasi Berkarakter, Cerdas dan Berakhlak Mulia</p>
							{{-- <div class="button button_1 register_button mx-auto trans_200"><a href="#">register now</a></div> --}}
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">

					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url({{ URL::asset('public/course')}}/images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Misi</h1>
							
						</div> 
						
						<div class="search_content ">
							<p class="register_text" >
							<ol style="color:black;">
								<li> Mengembangkan Lingkungan Pendidikan yang Islami</li>
								<br>
								<li> Mengembangkan Pendidikan Dasar Dalam Rangka Pembentukan Pribadi yang Berkarakter, Cerdas dan Berakhlak Mulia</li>
								<br>
								<li> Mengoptimalkan Peran Serta Orang Tua, Masyarakat dan Pemerintah Dalam Pengembangan Pendidikan</li>
							</ol>
							</p>
							
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Jadwal Kegiatan</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">Mei</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Pendaftaran</a></div>
									<div class="event_location">Kompleks SD Al Fatiih</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="{{ URL::asset('public/course')}}/images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
								</div>
							</div>

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_month">hingga</div>
									<div class="event_day">30 </div>
									<div class="event_month">Juni</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Registrasi Ulang</a></div>
									<div class="event_location">Kompleks SD Al Fatiih</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="{{ URL::asset('public/course')}}/images/event_2.jpg" alt="https://unsplash.com/@claybanks1989">
								</div>
							</div>

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day"></div>
									<div class="event_month">Coming Soon</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Placement Test</a></div>
									<div class="event_location">Kompleks SD Al Fatiih</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="{{ URL::asset('public/course')}}/images/event_3.jpg" alt="https://unsplash.com/@juanmramosjr">
								</div>
							</div>

						</div>	
					</div>
				</div>

			</div>
				
		</div>
	</div>
@endsection