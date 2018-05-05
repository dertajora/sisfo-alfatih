@extends('layout.website')

@section('style_specific')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('course')}}/styles/news_styles.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('course')}}/styles/news_responsive.css">
@endsection

@section('content')

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url({{ URL::asset('course')}}/images/news_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Berita</h1>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Column -->

				<div class="col-lg-8">
					
					<div class="news_posts">
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="{{ URL::asset('course')}}/images/news_1.jpg" alt="https://unsplash.com/@dsmacinnes">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>18</div>
										<div>dec</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="#">Why do you need a qualification?</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">By Christian Smith</a></span>
										
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies.</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="news_post.html">Read More</a>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="{{ URL::asset('course')}}/images/news_2.jpg" alt="https://unsplash.com/@dsmacinnes">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>18</div>
										<div>dec</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="#">Our new courses just for you?</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">By Christian Smith</a></span>
										
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies.</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="#">Read More</a>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="{{ URL::asset('course')}}/images/news_3.jpg" alt="https://unsplash.com/@dsmacinnes">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>18</div>
										<div>dec</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="#">Why take our graduate program??</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">By Christian Smith</a></span>
										
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies.</p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="#">Read More</a>
							</div>
						</div>
					</div>

					<!-- Page Nav -->

					<div class="news_page_nav">
						<ul>
							<li class="active text-center trans_200"><a href="#">01</a></li>
							<li class="text-center trans_200"><a href="#">02</a></li>
							<li class="text-center trans_200"><a href="#">03</a></li>
						</ul>
					</div>

				</div>

				<!-- Sidebar Column -->

				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Archives -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Kategori</h3>
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><a href="#">Info Wali</a></li>
								<li class="sidebar_list_item"><a href="#">Kabar Sekolah</a></li>
								<li class="sidebar_list_item"><a href="#">Prestasi</a></li>
								
							</ul>
						</div>

						<!-- Latest Posts -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Berita Terakhir</h3>
							</div>
							
							<div class="latest_posts">
								
								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="{{ URL::asset('course')}}/images/latest_1.jpg" alt="https://unsplash.com/@dsmacinnes">
									</div>
									<div class="latest_post_title"><a href="#">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By Christian Smith</a></span>
										
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="{{ URL::asset('course')}}/images/latest_2.jpg" alt="https://unsplash.com/@erothermel">
									</div>
									<div class="latest_post_title"><a href="#">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By Christian Smith</a></span>
										
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="{{ URL::asset('course')}}/images/latest_3.jpg" alt="https://unsplash.com/@element5digital">
									</div>
									<div class="latest_post_title"><a href="#">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By Christian Smith</a></span>
										
									</div>
								</div>
								
							</div>
								
						</div>

						

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('script')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{ URL::asset('course')}}/plugins/easing/easing.js"></script>
<script src="{{ URL::asset('course')}}/js/contact_custom.js"></script>
@endsection