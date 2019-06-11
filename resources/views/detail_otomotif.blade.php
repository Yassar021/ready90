<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

	<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">

	<!-- Document Title
	============================================= -->
	<title>Kumala Group</title>

	<style>
		.detail-list img {
			width: 150px;
			margin-top: 15px;
		}
	</style>

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
							<li><a href="/">
									<div>@lang('navbar.home')</div>
								</a>
							</li>
							<li><a href="{{route('about')}}">
									<div>@lang('navbar.about')</div>
								</a>
								<ul>
									<li><a href="{{route('about')}}">
											<div><i class="icon-gift"></i>@lang('navbar.history')</div>
										</a></li>
									<li><a href="{{route('about')}}">
											<div><i class="icon-umbrella"></i>@lang('navbar.visi')</div>
										</a></li>
									<li><a href="{{route('about')}}">
											<div><i class="icon-wpforms"></i>BOD</div>
										</a></li>
								</ul>
							</li>
							<li class="mega-menu current"><a href="#">
									<div>@lang('navbar.unit')</div>
								</a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#">
												<div>Otomotif</div>
											</a>
											<ul>
												<li><a href="{{route('motif', 'wuling')}}">
														<div>Wulings</div>
													</a></li>
												<li><a href="{{route('motif', 'masda')}}">
														<div>Mazda</div>
													</a></li>
												<li><a href="{{route('motif', 'honda')}}">
														<div>Honda</div>
													</a></li>
												<li><a href="{{route('motif', 'hyno')}}">
														<div>Hino</div>
													</a></li>
												<li><a href="{{route('motif', 'mercedes')}}">
														<div>Mercedez Benz</div>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="{{route('property')}}">
												<div>Properti</div>
											</a>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="{{route('trade')}}">
												<div>Trading</div>
											</a>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="{{route('mining')}}">
												<div>Mining</div>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="{{route('berita')}}">
									<div>@lang('navbar.news')</div>
								</a></li>
							<li class="mega-menu"><a href="{{route('karir')}}">
									<div>@lang('navbar.career')</div>
								</a></li>
							<li><a href="{{route('kontak')}}">
									<div>@lang('navbar.contact')</div>
								</a></li>
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
		<div class="content-wrap">
		@if(session()->get('success'))
			<div class="alert alert-success">
			{{ session()->get('success') }}  
			</div><br />
		@endif
		</div>
		<section id="content">

				<div class="heading-block notopmargin notopborder center">
					<h3 data-animate="fadeInDown">Detail </h3>
				</div>

				<div class="container clearfix">

					<div class="col_two_fifth">
						<img src="{{asset('img/automotif/'.$data->gambar)}}" alt="" data-animate="fadeInRight">
					</div>

					<div class="col_three_fifth  col_last">
						<div>
						<h4 style=" color:#C02942" data-animate="fadeInDown">@lang('navbar.tentang') @if(app()->getLocale()=='id') {{$data->nama}} @else {{ $data->name}} @endif</h4>
						</div>
						@if(app()->getLocale()=='id')
						<p align="justify" data-animate="fadeInLeft">{{$data->deskripsi}}</p>
						@else
						<p align="justify" data-animate="fadeInLeft">{{$data->desc}}</p>
						@endif
					</div>

				</div>
				<div class="container bottommargin">
					<div class="row">
						<div class="col-4">
							<h3>@lang('navbar.pw')</h3>
						</div>

						<div class="col-6">
							<a href="{{asset('storage/img/automotif/'.$data->brocure)}}" class="button button-rounded button-reveal button-small button-red tright">Download Brosur</a>
							<button class="button button-rounded button-reveal button-small button-red tright" data-toggle="modal" data-target=".bs-example-modal-lg">Test Drive</button>

							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-body">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel">Layanan Test Drive</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">
												<form action="{{route('uji')}}" method="POST">
													@csrf
													<div class="form-group">
														<label for="namalengkap">Nama: </label>
														<input type="text" name="nama" class="form-control" id="namalengkap" placeholder="Nama Lengkap anda">
													</div>
													<div class="form-group">
														<label for="email">Email :</label>
														<input type="email" name="email" class="form-control" id="email" placeholder="Email anda">
													</div>
													<div class="form-group">
														<label for="nohp">No Telepon: </label>
														<input name="hp" type="text" class="form-control" id="nohp" placeholder="No Telepon anda">
													</div>
													<div class="form-group">
														<label for="nohp">Dealer: </label>
														<input name="dealer" type="text" class="form-control" id="nohp" placeholder="Dealer">
													</div>
													<div class="form-group">
														<label for="exampleFormControlSelect1">Jenis Kelamin</label>
														<select name="jk" class="form-control" id="exampleFormControlSelect1">
															<option value="laki-laki">Laki-laki</option>
															<option value="perempuan">Perempuan</option>
														</select>
													</div>
													<div class="form-group">
														<label for="alamat">Alamat anda : </label>
														<input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat anda">
													</div>
													<div class="form-group">
														<label for="asal">Asal Kota: </label>
														<input name="kota" type="text" class="form-control" id="asal" placeholder="Asal Kota anda">
													</div>
													<div class="form-group">
														<label for="daerah">Daerah di kota anda: </label>
														<input name="daerah" type="text" class="form-control" id="daerah" placeholder="daerah di kota anda">
													</div>
													<button type="submit" class="button button-3d button-small button-rounded button-red">Kirim</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>

							<button class="button button-rounded button-reveal button-small button-red tright" data-toggle="modal" data-target=".bs-example-modal-md">Cek Penawaran</button>

							<div class="modal fade bs-example-modal-md" tabindex="-2" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-md">
									<div class="modal-body">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel">Dapatkan Penawaran Terbaik</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">
												<form action="{{route('nawar')}}" method="post">
													@csrf
													<div class="form-group">
														<label for="namalengkap">Nama Lengkap: </label>
														<input type="text" name="nama" class="form-control" id="namalengkap" placeholder="Nama Lengkap anda">
													</div>
													<div class="form-group">
														<label for="email">Email :</label>
														<input type="email" name="email" class="form-control" id="email" placeholder="Email anda">
													</div>
													<div class="form-group">
														<label for="nohp">No Telepon: </label>
														<input name="hp" type="text" class="form-control" id="nohp" placeholder="No Telepon anda">
													</div>
													<div class="form-group">
														<label for="exampleFormControlSelect1">Rincian Pembelian</label>
														<select name="rencana" class="form-control" id="exampleFormControlSelect1">
															<option value="0-1 bulan">0-1 Bulan</option>
															<option value="0-2 bulan">0-2 Bulan</option>
															<option value="0-3 bulan">0-3 Bulan</option>
														</select>
													</div>
													<div class="form-group">
														<label for="exampleFormControlSelect1">Pilih Mobil*</label>
														<input name="mobil" value="{{$data->nama}}" class="form-control" id="exampleFormControlSelect1">
													</div>
													<div class="form-group">
														<label for="exampleFormControlSelect1">Kota</label>
														<input type="text" name="kota" class="form-control" id="exampleFormControlSelect1">
													</div>
													<div class="form-group">
														<label for="exampleFormControlSelect1">Dealer</label>
														<input type="text" name="dealer" class="form-control" id="exampleFormControlSelect1">
													</div>
													<button type="submit" class="button button-3d button-small button-rounded button-red">Minta Penawaran</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2"></div>
					</div>

					<div class="row">
						<div class="col-4 detail-list">
							<img src="{{asset('img/automotif/'.$data->gambar)}}" alt="" data-animate="fadeInRight"> <br>
							<img style="margin-top: 30px;" src="{{asset('img/automotif/'.$data->gambar2)}}" alt="" data-animate="fadeInRight"> </br>
							<img style="margin-top: 30px;" src="{{asset('img/automotif/'.$data->gambar3)}}" alt="" data-animate="fadeInRight">
						</div>

						<div class="col-6 detail-img center">
							<h4>@if(app()->getLocale()=='id') {{$data->nama}} @else {{ $data->name}} @endif</h4>
							<img src="{{asset('img/automotif/'.$data->gambar)}}" alt="" data-animate="fadeInRight">
						</div>
						<div class="col-2"></div>
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