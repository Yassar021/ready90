<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Kumala Group</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
							<a href="/" class="standard-logo" data-dark-logo="{{asset('images/logo-dark.png')}}"><img src="{{asset('images/logo/logo.png')}}" alt="Canvas Logo"></a>
						<div class="retina-logo">
							<a href="/" class="retina-logo" data-dark-logo="{{asset('images/logo-dark@2x.png')}}"><img src="{{asset('images/logo/logo.png')}}" alt="Canvas Logo"></a>			
						</div>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="/"><div>@lang('navbar.home')</div></a>
							</li>
							<li class=" current"><a href="#"><div>@lang('navbar.about')</div></a>
								<ul>
								<li><a href="{{route('about')}}"><div><i class="icon-gift"></i>@lang('navbar.history')</div></a></li>
									<li><a href="{{route('about')}}"><div><i class="icon-umbrella"></i>@lang('navbar.visi')</div></a></li>
									<li><a href="{{route('about')}}"><div><i class="icon-wpforms"></i>BOD</div></a></li>
								</ul>
							</li>
							<li class="mega-menu"><a href="#"><div>@lang('navbar.unit')</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="{{route('oto')}}"><div>Otomotif</div></a>
											<ul>
													<li><a href="{{route('motif', 'wuling')}}"><div>Wulings</div></a></li>
													{{-- <li><a href="{{route('motif', 'masda')}}"><div>Mazda</div></a></li>
													<li><a href="{{route('motif', 'honda')}}"><div>Honda</div></a></li>
													<li><a href="{{route('motif', 'hyno')}}"><div>Hino</div></a></li>
													<li><a href="{{route('motif', 'mercedes')}}"><div>Mercedez Benz</div></a></li> --}}
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="{{route('property')}}"><div>Properti</div></a>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="{{route('trade')}}"><div>Trading</div></a>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="{{route('mining')}}"><div>Mining</div></a>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="{{route('berita')}}"><div>@lang('navbar.news')</div></a></li>
							<li class="mega-menu"><a href="{{route('karir')}}"><div>@lang('navbar.career')</div></a></li>
							<li><a href="{{route('kontak')}}"><div>@lang('navbar.contact')</div></a></li>
						</ul>


						@if(app()->getLocale()=='id')
						<div id="top-search">
							<a href="{{ url('/locale/en') }}" class="lang-button"> 
								<span class="active">ID</span>    
								<span>EN</span> <i class="clear"></i> 
							</a>
						</div>
						@else
						<div id="top-search">
							<a href="{{ url('/locale/id') }}" class="lang-button"> 
								<span>ID</span>    
								<span class="active">EN</span> <i class="clear"></i> 
							</a>
						</div>
						@endif

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>@lang('navbar.about')</h1>
				<!-- <span>Berita Terkini</span> -->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">@lang('navbar.home')</a></li>
					<li class="breadcrumb-item active" aria-current="page">@lang('navbar.about')</li>
				</ol>
            </div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

            <div class="container clearfix topmargin bottommargin">
                <div class="col bottommargin">
                        <!-- <h4>with Bottom Border</h4> -->

						<div class="tabs tabs-bb clearfix" id="tab-9">

							<ul class="tab-nav clearfix">
								<li><a href="#tabs-33"><i class="icon-home2" style="margin-right: 3px;"></i>@lang('navbar.visi')</a></li>
								<li><a href="#tabs-34">@lang('navbar.history')</a></li>
								<li><a href="#tabs-35">BOD</a></li>
							</ul>

							<div class="tab-container">

								<div class="tab-content clearfix" id="tabs-33">
									<!-- Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus. -->
									<div class="row">
										<div class="col-md-2">
							@if(app()->getLocale()=='id')

											<h4>Visi: </h4>
											@else 
											<h4>Vision: </h4>
											@endif
										</div>
										<div class="col-md-6">
											<p align="justify">
												Menjadi Group Perusahaan terbaik di Indonesia dengan nilai tambah terbaik bagi pelanggan melalui kombinasi Harga, Kualitas dan Kepuasan Layanan.
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-2">
							@if(app()->getLocale()=='id')

											<h4>Misi: </h4>
											@else 
											<h4>Mission: </h4>
											@endif
										</div>
										<div class="col-md-6">
											<ul>
												<li>
													Memberikan solusi terhadap kebutuhan pelanggan  dan menciptakan hubungan baik untuk mencapai kepuasan pelanggan
												</li>
												<li>
													Meningkatkan pertumbuhan perusahaan secara berkesinambungan untuk mencapai hasil terbaik.
												</li>
												<li>
													Tumbuh bersama dengan para Stakeholder kami (Karyawan & Pelanggan)
												</li>
											</ul>
										</div>
									</div>
									
									
								</div>

								<div class="tab-content clearfix" id="tabs-34">
									<!-- Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus. -->
									<h4>History Kumala Group.</h4>
									<p align="justify">
										Berdiri sejak 1983 di Jalan Kumala No. 1 Makassar-Sulawesi Selatan, pada awalnya Kumala Group hadir dengan lini bisnis Jual Beli Mobil bekas. Selama hampir 31 tahun secara konsisten Kumala Group terus berkembang . Saat ini, Kumala Group memiliki Jaringan usaha tersebar di seluruh Indonesia Tengah dan Timur melalui 5 Anak Perusahaan yang mengoperasikan 35 Dealer Otomotif Resmi, Property terdiri dari Primewood Mansion, Pettarani Bussiness Centre serta Rental Property, Mining, Trading & Oil yang didukung oleh lebih dari 1.000  Karyawan. 
										Dalam bisnis Otomotif, Kumala Grup  merupakan pemegang lisensi resmi untuk beberapa Brand Otomotif ternama yakni Hino, Wuling, Mazda, Honda dan Marcedez Benz. 
									</p>
									<p>
										Sesuai dengan komitmen <b>“Your Best Partner”</b>, Kumala Group tak pernah berhenti menawarkan beragam solusi yang menjawab kebutuhan Anda dari berbagai kalangan. Kumala Group akan terus berupaya menjaga kepercayaan  Anda dan melangkah bersama di masa depan. 
										Memenangkan kepercayaan  dan menjadi partner Anda  merupakan suatu Kebanggaan bagi Kumala Group.
									</p>
								</div>

								<div class="tab-content clearfix" id="tabs-35">
									<!-- <div class="container"> -->
										<div class="row center">
											<div class="col-lg-4 topmargin">
												<div class="card" style="width: 18rem;">
													<div class="card-body">
														<div class="row">
															<div class="col-md-6">
																<img src="{{asset('images/about/1_1.png')}}" width="150px" height="150px" alt="">
															</div>

															<div class="col-md-6">
																<p class="card-text"> <b>Mr. Ricky Tandiawan</b> <footer class="blockquote-footer">Chairman.</footer>																	</p>
															</div>
														</div>
													</div>
												</div>
											</div>
				
											<div class="col-lg-4 topmargin">
												<div class="card" style="width: 18rem;">
													<div class="card-body">
														<div class="row">
															<div class="col-md-6">
																<img src="{{asset('images/about/1_2.png')}}" width="150px" height="150px" alt="">
															</div>

															<div class="col-md-6">
																<p class="card-text"> <b>Mr. Erwin Tandiawan</b> <footer class="blockquote-footer">President Director.</footer></p>
															</div>
														</div>
													</div>
												</div>
											</div>
				
											<div class="col-lg-4 topmargin">
												<div class="card" style="width: 18rem;">
													<div class="card-body">
														<div class="row">
															<div class="col-md-6">
																<img src="{{asset('images/about/1_3.png')}}" width="150px" height="150px" alt="">
															</div>

															<div class="col-md-6">
																<p class="card-text"> <b>Mr.  Erick Tandiawan</b> <footer class="blockquote-footer">Director.</footer>	</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row center">
											<div class="col-lg-3"></div>
											<div class="col-lg-4 topmargin">
												<div class="card" style="width: 18rem;">
													<div class="card-body">
														<div class="row">
															<div class="col-md-6">
																<img src="{{asset('images/about/1_4.png')}}" width="150px" height="150px" alt="">
															</div>

															<div class="col-md-6">
																<p class="card-text"> <b>Mr. Jody Kosasih </b> <footer class="blockquote-footer">Director.</footer>	</p>
															</div>
														</div>
													</div>
												</div>
											</div>
				
											<div class="col-lg-4 topmargin">
												<div class="card" style="width: 18rem;">
													<div class="card-body">
														<div class="row">
															<div class="col-md-6">
																<img src="{{asset('images/about/1_5.png')}}" width="150px" height="150px" alt="">
															</div>

															<div class="col-md-6">
																<p class="card-text"> <b>Mrs. Linda Wijaya </b> <footer class="blockquote-footer">Finance Director.</footer></p>
															</div>
														</div>
													</div>
												</div>
											</div>
				
										<!-- </div> -->
									</div>
								</div>
							</div>

						</div>

                </div>
            </div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col center">
						Copyrights &copy; 2019 All Rights Reserved by <a href="#">Kumala Group.</a>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('js/functions.js')}}"></script>

</body>
</html>