@extends('layout.website')

@section('style_specific')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/course')}}/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/course')}}/styles/contact_responsive.css">
@endsection

@section('content')

<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url({{ URL::asset('public/course')}}/images/contact_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Tentang</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Kirim Pesan</div>

						<div class="contact_form_container">
							<form action="post">
								<input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Nama" required="required" data-error="Name is required.">
								<input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="Email" required="required" data-error="Valid email is required.">
								<br><Br>
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Pesan" required="required" data-error="Please, write us a message."></textarea>
								<button id="contact_send_btn" type="button" class="contact_send_btn trans_200" value="Submit">Kirim Pesan</button>
							</form>
						</div>
					</div>
						
				</div>

				<div class="col-lg-4">
					<div class="about">
						<div class="about_title">Tentang Kami</div>
						<p class="about_text">Sekolah Karakter SD AL-Fatiih adalah Lembaga Pendidikan yang didirikan oleh Yayasan Muhammad Al-Fatiih Tanjungpinang. Berdasarkan Visi dan Misinya, lembaga ini memiliki tujuan untuk mendidik karakter peserta didik semenjak dini sehingga dapat menjadi generasi yang Berkarakter TSABIT (Tangguh & Mandiri / Syukur / Amanah / Bermanfaat / Istiqomah / Tertib & Disiplin) serta memiliki Aqidah yang lurus.</p>

						<div class="contact_info">
							<ul>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="{{ URL::asset('public/course')}}/images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Jl. Merpati Kp. Sidojadi km 13, RT 3 / RW 9<br>
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									Kel. Batu IX, Komplek Ruko No 2
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="{{ URL::asset('public/course')}}/images/phone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0812-2812-5872
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="{{ URL::asset('public/course')}}/images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>yayasanmuhammadalfatih@gmail.com
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>

			<!-- Google Map -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
@endsection

@section('script')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{ URL::asset('public/course')}}/plugins/easing/easing.js"></script>
<script src="{{ URL::asset('public/course')}}/js/contact_custom.js"></script>
@endsection