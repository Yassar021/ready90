<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
							<li class="mega-menu current"><a href="#"><div>@lang('navbar.career')</div></a></li>
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
		<section id="page-title" class="page-title-parallax" style="background-image: url('images/parallax/9.jpg'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<h1 data-animate="fadeInUp">@lang('navbar.career')</h1>
				<!-- <span data-animate="fadeInUp" data-delay="300">Kumala Group</span> -->
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				@if(session()->get('success'))
					<div class="alert alert-success">
					{{ session()->get('success') }}  
					</div><br />
				@endif
				</div>
			<div class="content-wrap">

                <div class="notopmargin notoppadding">

					<div class="container clearfix">
                        <div class="col_two_fifth">
								<img src="images/about/3.jpg" alt=""  data-animate="fadeInRight">
						</div>	

						<div class="col_three_fifth col_last topmargin-lg">

							<p align="justify"  data-animate="fadeInLeft">Bagi Kumala Group, Sumber Daya Manusia (SDM) merupakan aset dan faktor utama yang menentukan kesuksesan perusahaan. Kumala Group membina hubungan kerja jangka panjang yang saling menguntungkan, sehingga tumbuh ikatan dan rasa kebersamaan antara 
								karyawan dan perusahaan untuk bersama mewujudkan peningkatan kesejahteraan yang berkelanjutan.</p>

						</div>

					</div>

				</div>

				<div class="container clearfix">

					<div class="col_full">
						<div class="table-responsive">
						  <table class="table table-bordered nobottommargin">
							<thead>
								@if(app()->getLocale()=='id')
							  <tr>
								<th>#</th>
								<th>Posisi</th>
								<th>Deskripsi</th>
								<th>Jumlah</th>
								<th>Aksi</th>
							  </tr>
							  @else 
							  <tr>
									<th>#</th>
									<th>Position</th>
									<th>Description</th>
									<th>Quantity</th>
									<th>Action</th>
								  </tr>
								@endif
							</thead>
							<tbody>
								@foreach ($karir as $item)
								
								<tr>
									<td>{{$item->id}}</td>
									<td>{{$item->position}}</td>
									@if(app()->getLocale()=='id')
								<td>{{$item->deskripsi}}</td>
								@else
								<td>{{$item->desc}}</td>
									@endif
								<td>{{$item->jumlah}}</td>
									<td>
										
										<button class="button button-3d button-mini button-rounded button-red" data-toggle="modal" data-target=".bs-example-modal-lg">Daftar</button>

										<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-body">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title" id="myModalLabel">Daftar</h4>
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														</div>
														<div class="modal-body">
															<form enctype="multipart/form-data" action="{{route('lamar')}}" method="POST">
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
																<label for="nohp">No HP: </label>
																<input type="text" name="hp" class="form-control" id="nohp" placeholder="No Hp anda">
															</div>
															<div class="form-group">
																<label for="alamat">Alamat :</label>
																<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat anda">
															</div>
															<div class="form-group">
																<div class="form-group">
																	<label for="foto">Masukkan Foto anda</label>
																	<input type="file" name="foto" class="form-control-file">
																</div>
															</div>
															<div class="form-group">
																<div class="form-group">
																	<label for="cv">Masukkan CV anda</label>
																	<input type="file" name="cv" class="form-control-file">
																</div>
															</div>
															<div class="form-group">
																<div class="form-group">
																	<label for="lamarankerja">Masukkan Surat Lamaran Kerja anda</label>
																	<input type="file" name="pelamar" class="form-control-file">

																</div>
															</div>
															<button type="submit" class="btn btn-primary">Kirim</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>																
								</td>
							</tr>
							@endforeach
							</tbody>
						  </table>
						</div>
					</div>

					<div class="clear"></div>

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