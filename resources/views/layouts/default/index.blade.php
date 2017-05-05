<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>{{ CNF_APPNAME }} | {{ $pageTitle}}</title>
		<meta name="keywords" content="{{ $pageMetakey }}" />
		<meta name="description" content="{{ $pageMetadesc }}" />
		<meta name="Author" content="Mangopik [www.mangopik.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<link rel="shortcut icon" href="" type="image/x-icon">	

		<!-- GOOGLE WEB FONTS  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="{{ asset('frontend') }}/default/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->		
		<link href="{{ asset('frontend') }}/default/css/core.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('frontend') }}/default/css/post.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('frontend') }}/default/css/default.css" rel="stylesheet" type="text/css" />
		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{{ asset('frontend') }}/default/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '{{ asset("frontend/default/plugins/") }}/';</script>
		<script type="text/javascript" src="{{ asset('frontend') }}/default/plugins/jquery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="{{ asset('frontend') }}/default/js/default.js"></script>
		<script type="text/javascript" src="{{ asset('sximo/js/plugins/parsley.js') }}"></script>
		<script type="text/javascript" src="{{ asset('sximo/js/plugins/jquery.jCombo.min.js') }}"></script>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "90d7901a-4bf9-4acd-967c-a770c0fc6756", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

	</head>

	<body class="smoothscroll enable-animation">
		

		<div id="wrapper">

			<!-- Top Bar -->
			<div id="topBar">
				<div class="container">

					<!-- right -->
					<ul class="top-links list-inline pull-right">
						@if(Auth::check())
						<li class="text-welcome hidden-xs">Welcome to OptoFish, <strong> {{ Session::get('fid')}}</strong></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i> {{ Lang::get('core.m_myaccount') }}</a>
							<ul class="dropdown-menu pull-right">
								<li><a tabindex="-1" href="{{ url('dashboard') }}"><i class="fa fa-desktop"></i> Dashboard</a></li>
								<li><a tabindex="-1" href="{{ url('user/profile?view=frontend') }}"><i class="fa fa-user"></i> {{ Lang::get('core.m_profile') }}</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="{{ url('user/logout') }}"><i class="glyphicon glyphicon-off"></i> {{ Lang::get('core.m_logout') }}</a></li>
							</ul>
						</li>
						@else
						<li class="text-welcome hidden-xs">Hello , <strong>Guest</strong></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i>{{ Lang::get('core.m_myaccount') }}</a>
							<ul class="dropdown-menu pull-right">
								<li><a tabindex="-1" href="{{ url('user/profile?view=frontend') }}"><i class="fa fa-history"></i> {{ Lang::get('core.signin') }} </a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="{{ url('user/register') }}"><i class="glyphicon glyphicon-off"></i> {{ Lang::get('core.signup') }}</a></li>
							</ul>
						</li>
						@endif
					</ul>

					<!-- left -->
					<ul class="top-links list-inline">
						@if(CNF_MULTILANG ==1)		

							<?php 
							$flag ='en';
							$langname = 'English'; 
							foreach(SiteHelpers::langOption() as $lang):
								if($lang['folder'] == $pageLang or $lang['folder'] == CNF_LANG) {
									$flag = $lang['folder'];
									$langname = $lang['name']; 
								}
							endforeach;?>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="{{ asset('sximo/images/flags/'.$flag.'.png') }}" width="16" height="11" alt="lang" /> {{ $langname }}</a>
							<ul class="dropdown-langs dropdown-menu">
								@foreach(SiteHelpers::langOption() as $lang)
								<li><a tabindex="-1" href="{{ url('home/lang/'.$lang['folder'])}}"><img class="flag-lang" src="{{ asset('sximo/images/flags/'.$lang['folder'].'.png') }}" width="16" height="11" alt="lang" /> {{  $lang['name'] }}</a></li>
								@endforeach
								
							</ul>
						</li>
						@endif
					</ul>

				</div>
			</div>
			<!-- /Top Bar -->

			<div id="header" class="sticky shadow-after-3 clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>


						<!-- Logo -->
						
							<!-- <a class="logo pull-left" style="font-size:30px;" href="{{ url()}}">
							<img src="{{ asset('frontend/default/images/sximo_logo.png')}}" width="150" title="{{ CNF_APPNAME }} " style="height: 40px !important" /> -->
							
							</a>
						

	
						@include('layouts/default/menu')


					</div>	
				</div>	


			@include($pages)


			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-4">
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										Adresa<br>
									</li>
									
									
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>

						<div class="col-md-4">
                            <ul class="list-unstyled">
							<!-- Latest Blog Post -->
							<li class="footer-sprite phone">
										Telefon: +11 22 33 44
							</li>
						</ul>

						</div>

						<div class="col-md-4">
							<!-- Links -->
							<li class="footer-sprite email">
										<a href="mailto:support@yourname.com">mail@mail.com</a>
									</li>

						</div>

	
					</div>

				</div>

				<div class="copyright">
					
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->
		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>
	</body>
</html>