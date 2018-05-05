@extends('layout.website')

@section("style_specific")
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/course')}}/styles/main_styles.css">

<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/course')}}/styles/teachers_styles.css">
@endsection

@section('content')
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url({{ URL::asset('public/course')}}/images/courses_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Program</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Program Unggulan</h1>
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
						
						</div>
						
					</div>
				</div>

				<div class="col-lg-12 public/course_box">
					<br><br>
				</div>

				<!-- Popular public/course Item -->
				<div class="col-lg-4 public/course_box">
					<div class="card">
						<img class="card-img-top" src="{{ URL::asset('public/course')}}/images/course_3.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title" style="color:black"><a>Science Class</a></div>
							<div class="card-text">Kalimat Tambahan</div>
							
						</div>
						
					</div>
				</div>

				<!-- Popular public/course Item -->
				<div class="col-lg-4 public/course_box">
					<div class="card">
						<img class="card-img-top" src="{{ URL::asset('public/course')}}/images/course_3.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title" style="color:black"><a>Humaniora Class</a></div>
							<div class="card-text">Kalimat Tambahan</div>
							
						</div>
						
					</div>
				</div>

				<!-- Popular public/course Item -->
				<div class="col-lg-4 public/course_box">
					<div class="card">
						<img class="card-img-top" src="{{ URL::asset('public/course')}}/images/course_2.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title" style="color:black"><a>Pengembangan Potensi</a></div>
							<div class="card-text">Pendalaman Karakter dan Bakat Anak Sejak Dini</div>
							
						</div>
						
					</div>
				</div>

				<div class="col-lg-12 public/course_box">
					<br><br>
				</div>
				
				<!-- Popular public/course Item -->
				<div class="col-lg-4 public/course_box">
					<div class="card">
						<img class="card-img-top" src="{{ URL::asset('public/course')}}/images/course_3.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title" style="color:black"><a>Bela Diri</a></div>
							<div class="card-text">Kalimat Tambahan</div>
							
						</div>
						
					</div>
				</div>

				<!-- Popular public/course Item -->
				<div class="col-lg-4 public/course_box">
					<div class="card">
						<img class="card-img-top" src="{{ URL::asset('public/course')}}/images/course_3.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title" style="color:black"><a>Cooking Class</a></div>
							<div class="card-text">Kalimat Tambahan</div>
							
						</div>
						
					</div>
				</div>

				<!-- Popular public/course Item -->
				<div class="col-lg-4 public/course_box">
					<div class="card">
						<img class="card-img-top" src="{{ URL::asset('public/course')}}/images/course_2.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title" style="color:black"><a>Robotic</a></div>
							<div class="card-text">Pendalaman Karakter dan Bakat Anak Sejak Dini</div>
							
						</div>
						
					</div>
				</div>

				<div class="col-lg-12 public/course_box">
					<br><br>
				</div>

				<!-- Popular public/course Item -->
				<div class="col-lg-2 public/course_box">
					
				</div>
				
				<!-- Popular public/course Item -->
				<div class="col-lg-4 public/course_box">
					<div class="card">
						<img class="card-img-top" src="{{ URL::asset('public/course')}}/images/course_3.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title" style="color:black"><a>Kepanduan</a></div>
							<div class="card-text">Kalimat Tambahan</div>
							
						</div>
						
					</div>
				</div>

				<!-- Popular public/course Item -->
				<div class="col-lg-4 public/course_box">
					<div class="card">
						<img class="card-img-top" src="{{ URL::asset('public/course')}}/images/course_3.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title" style="color:black"><a>Archery</a></div>
							<div class="card-text">Kalimat Tambahan</div>
							
						</div>
						
					</div>
				</div>

				

				
			
			</div>
		</div>		
	</div>
@endsection