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

	<link rel="stylesheet" href="{{asset('css/course/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/course/course.css')}}" type="text/css" />

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
													<li><a href="{{route('motif', 'masda')}}"><div>Mazda</div></a></li>
													<li><a href="{{route('motif', 'honda')}}"><div>Honda</div></a></li>
													<li><a href="{{route('motif', 'hyno')}}"><div>Hino</div></a></li>
													<li><a href="{{route('motif', 'mercedes')}}"><div>Mercedez Benz</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#"><div>Properti</div></a>
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

		<!-- Page 
		============================================= -->
		<section id="page-title" class="page-title-parallax" style="background-image: url('images/parallax/9.jpg'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<h1 data-animate="fadeInUp">Property</h1>
				<span data-animate="fadeInUp" data-delay="300">Kumala Group</span>
			</div>

		</section><!-- #page-title end -->


		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">
				
        		<!-- Wave Shape Divider
					============================================= -->
					<div class="wave-top" style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('images/shape-dividers/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x;"></div>

					<div class="container">

						<!-- <div class="heading-block nobottomborder mb-5 center">
							<h3>Properties</h3>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum. Voluptatibus, perspiciatis placeat.</span>
						</div> -->

						<div class="clear"></div>

						<div class="row mt-2">

						@foreach ($data as $item)
						<div class="col-md-4 mb-5">
							<div class="card course-card hover-effect noborder">
								<a href="{{route('dproperty',$item->id )}}"><img height="200px" class="card-img-top" src="{{asset('img/property/'.$item->gambar)}}" alt="Card image cap"></a>
								<div class="card-body">
								<h4 class="card-title t700 mb-2"><a href="{{route('dproperty',$item->id )}}">@if(app()->getLocale()=='id') {{$item->nama}} @else {{$item->name}} @endif</a></h4>
								<p class="mb-2 card-title-sub uppercase t400 ls1"><a href="{{route('dproperty',$item->id )}}" class="text-black-50">{{$item->type}}</a></p>
								</div>									
							</div>
						</div>
						@endforeach

							
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