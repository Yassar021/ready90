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
							<li><a href="{{route('about')}}"><div>@lang('navbar.about')</div></a>
								<ul>
									<li><a href="{{route('about')}}"><div><i class="icon-gift"></i>@lang('navbar.history')</div></a></li>
									<li><a href="{{route('about')}}"><div><i class="icon-umbrella"></i>@lang('navbar.visi')</div></a></li>
									<li><a href="{{route('about')}}"><div><i class="icon-wpforms"></i>BOD</div></a></li>
								</ul>
							</li>
							<li class="mega-menu current"><a href="#"><div>@lang('navbar.unit')</div></a>
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
		<section id="page-title" class="page-title-parallax" style="background-size: cover; background-image: url('https://images.unsplash.com/photo-1474244896358-ce3784088cc8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<!-- <h1 data-animate="fadeInUp">Karir</h1> -->
				<!-- <span data-animate="fadeInUp" data-delay="300">Kumala Group</span> -->
			</div>

		</section><!-- #page-title end -->
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">
				
                    <div class="heading-block notopmargin notopborder center">
							<h3 data-animate="fadeInDown">
								@if($nama->merek == "masda")
								Mazda
								@elseif($nama->merek == "wuling")
								Wuling
								@elseif($nama->merek == "honda")
								Honda
								@elseif($nama->merek == "mercedes")
								Mercedes Benz
								@elseif($nama->merek == "hyno")
								Hyno
								@endif
							</h3>
							<!-- <span>We have worked on some Awesome Projects that are worth boasting of.</span> -->
							<button class="button button-rounded button-reveal button-small button-red tright" data-toggle="modal" data-target=".bs-example-modal-lg">Check Dealer </button>

							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-body">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel">Pilih Lokasi Dealer Wuling di kota anda: </h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">
													<ul id="myTab" class="nav nav-tabs boot-tabs">
														<!-- <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="tab">Pilih Lokasi Dealer</a></li> -->
														<!-- <li class="nav-item"><a class="nav-link" href="#profile" data-toggle="tab">Profile</a></li> -->
														<li class="nav-item dropdown">
															<a class="nav-link dropdown-toggle" href="#" id="myTabDrop1" data-toggle="dropdown">Pilih Kota anda</a>
															<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
															<a class="dropdown-item" href="#dropdown1" tabindex="-1" data-toggle="tab">Makassar</a>
															<a class="dropdown-item" href="#dropdown2" tabindex="-1" data-toggle="tab">Gorontalo</a>
															<a class="dropdown-item" href="#dropdown3" tabindex="-1" data-toggle="tab">Ternate</a>
															<a class="dropdown-item" href="#dropdown4" tabindex="-1" data-toggle="tab">Mamuju</a>
															<a class="dropdown-item" href="#dropdown5" tabindex="-1" data-toggle="tab">Palu</a>
															<a class="dropdown-item" href="#dropdown6" tabindex="-1" data-toggle="tab">Pare-pare</a>
															<a class="dropdown-item" href="#dropdown7" tabindex="-1" data-toggle="tab">Manado</a>
															<a class="dropdown-item" href="#dropdown8" tabindex="-1" data-toggle="tab">Kendari</a>
															<a class="dropdown-item" href="#dropdown9" tabindex="-1" data-toggle="tab">Kolaka</a>
															<a class="dropdown-item" href="#dropdown10" tabindex="-1" data-toggle="tab">Bali</a>
															<a class="dropdown-item" href="#dropdown11" tabindex="-1" data-toggle="tab">Tomohon</a>
															<a class="dropdown-item" href="#dropdown12" tabindex="-1" data-toggle="tab">Palop</a>
															<a class="dropdown-item" href="#dropdown13" tabindex="-1" data-toggle="tab">Bone</a>
															</ul>
														</li>
													</ul>
													<div id="myTabContent" class="tab-content">
														<!-- <div class="tab-pane fade show active" id="home">
															<h4>Pilih Lokasi Dealer dikota anda</h4>
														</div>
														 -->
														<div class="tab-pane fade" id="dropdown1">
															<h4 style="margin-bottom:15px;">Kota Makassar: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling Makassar</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text"> Jl. A.P. Pettarani No.98B , Makassar <br> No tlp/fax : 0411 420980 </p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col_half card col_last">
																<div class="card-header">Trans Studio Mall Makassar</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/2.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text"> 0411 420980 </p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane fade" id="dropdown2">
															<h4 style="margin-bottom:15px;">Kota Gorontalo: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling Gorontalo</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text"> Jl. Nani wartabone ex ahmad yani No 13-14 Kota Timur Gorontalo <br>
																				No tlp/fax : 0435 853 7260 </p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>															
														</div>
														<div class="tab-pane fade" id="dropdown3">
															<h4 style="margin-bottom:15px;">Kota Ternate: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling Ternate</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text"> Jl. Raya Mangga Dua, RT.007/RW 03, Ternate Selatan, Kota Ternate. <br>
																				No tlp/fax : 082347633199 </p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>															
														</div>
														<div class="tab-pane fade" id="dropdown4">
															<h4 style="margin-bottom:15px;">Kota  Mamuju: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling Mamuju</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text">  Jalan jendral sudirman,kelurahan simboro,kecamatan simboro,kab.mamuju,sulawesi barat <br>
																				No tlp/fax : 0426 2332087 </p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>															
														</div>
														<div class="tab-pane fade" id="dropdown5">
															<h4 style="margin-bottom:15px;">Kota Palu: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling Palu</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text"> Jl. Jend. Basuki Rahmat no.62  Kel. Tatura Selatan Kec. Palu Selatan, Palu, Sulawesi Tengah <br>
																				No tlp/fax: (0451-8202000) </p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>															
														</div>
														<div class="tab-pane fade" id="dropdown6">
															<h4 style="margin-bottom:15px;">Kota Pare-pare: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling Pare-pare</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text"> Jl. Bau Massepe No.212-214 , Pare-Pare <br>
																				No tlp/fax : 0421 2917768 </p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>															
														</div>
														<div class="tab-pane fade" id="dropdown7">
															<h4 style="margin-bottom:15px;">Kota Manado: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling Manado</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text"> Jl. Bumi Nyiur, Wanea, Kota Manado, Sulawesi Utara <br>
																				No tlp/fax : 0431 836448 </p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>															
														</div>
														<div class="tab-pane fade" id="dropdown8">
															<h4 style="margin-bottom:15px;">Kota kendari: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling kendari</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text"> Jl. Jenderal Ahmad Yani No.28a, Lepo-Lepo, Baruga, Kota Kendari <br>
																				No telp : 0401 3191419</p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>															
														</div>
														<div class="tab-pane fade" id="dropdown9">
															<h4 style="margin-bottom:15px;">Kota Kolaka: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling Kolaka</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text"> Jl. Pahlawan no.28 kel.watuliandu kec. Kolaka. Kab kolaka <br>
																				No telpon : (0405) 2326868 </p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>															
														</div>
														<div class="tab-pane fade" id="dropdown10">
															<h4 style="margin-bottom:15px;">Kota Bali: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling Bali</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text">Jl. Teuku Umar Barat 150T, Padang Sambian Kelod, Denpasar, Bali <br>
																				Telp: (0361) 8466634, 8466635, 8466636 </p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>															
														</div>
														<div class="tab-pane fade" id="dropdown11">
															<h4 style="margin-bottom:15px;">Kota Tomohon: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling Tomohon</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text"> Jln Raya Tomohon Kel. Kakaskasen Kec. Tomohon utara, Kota Tomohon (95418) <br>
																				No tlp/fax : (0431) 3155530.</p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>															
														</div>
														<div class="tab-pane fade" id="dropdown12">
															<h4 style="margin-bottom:15px;">Kota Palopo: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling Palopo</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text"> Jln. Jend Sudirman, No 168 Kel.Binturu   Kec.wara selatan Kota Palopo <br>
																				No tlp/fax : 0471 2206680</p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>															
														</div>
														<div class="tab-pane fade" id="dropdown13">
															<h4 style="margin-bottom:15px;">Kota Bone: </h4>
															<div class="col_half card">
																<div class="card-header">Wuling Bone</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="{{asset('images/lokasidealer/1.png')}}" width="150px" alt="">
																		</div>

																		<div class="col-md-6">
																			<p class="card-text"> Jl.Letjend.Sukawati,Watampone Kel.Macege,Kec.Tanete Riattang Barat,Kab.Bone <br>
																				No telp: 0481 2922299</p>
																		</div>
																	</div>
																	<div class="row" style="margin-top: 10px;">
																		<div class="col-md-12">
																			<a href="https://goo.gl/maps/EGfHYfcRSHCV3Nbs9" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
																		</div>
																	</div>
																</div>
															</div>															
														</div>
													</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>

					<div class="container clearfix">	
                        <div class="row">
							@foreach ($data as $item)
								
                            <div class="col-lg-4 topmargin">
								<div class="card" style="width: 18rem;">
									<img class="card-img-top" style="height: 150px" src="{{asset('img/automotif/'.$item->gambar)}}" alt="Card image cap">
										<div class="card-body">
										<h4 style=" color:#C02942" class="card-title">{{$item->nama}}</h4>
											<h5 style="float: left;">Starting From* 
													<br> 
													Rp.{{$item->price}}
												</h5>
											<a style="margin-left: 25px;" href="{{route('otom', $item->id)}}" class="button button-rounded button-reveal button-small button-red tright"><i class="icon-angle-right"></i><span>Check</span></a>
											</div>
										</div>
									</div>
							@endforeach

                        </div>
                    </div>
					
                    <div class="row topmargin">
                        <div class="col-12">
                           <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
									{{$data->links()}}
                                </ul>
                            </nav>
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