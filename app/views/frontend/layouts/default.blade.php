<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Bootstrap
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- CSS
		================================================== -->
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        @yield('styles')
		
		<style>

		html,body {
			padding:0;
			margin:0;
		}
		footer{
		

			text-indent: 20px;
			box-shadow: 0 -5px 5px -5px #ccc;
		    

		}

		</style>
	
        
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">
		<link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
	</head>

	<body>

			<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    	<ul class="nav navbar-nav">
    		<li {{ (Request::is('/') ? 'class="active"' : '') }}><a href="{{ route('home') }}"><i class="icon-home icon-white"></i> Home</a></li>
    		<li {{ (Request::is('about-us') ? 'class="active"' : '') }}><a href="{{ URL::to('about-us') }}"><i class="icon-file icon-white"></i> About us</a></li>
    		<li {{ (Request::is('contact-us') ? 'class="active"' : '') }}><a href="{{ URL::to('contact-us') }}"><i class="icon-file icon-white"></i> Contact us</a></li>
    	</ul>
     
      <ul class="nav navbar-nav navbar-right">
      
      	@if (Sentry::check())
      	<li class="dropdown {{ (Request::is('account*') ? ' active' : '') }}">
      		<a class="dropdown-toggle" role="button" data-toggle="dropdown"  aria-expanded="false" href="{{ route('account') }}">
      			Welcome, {{ Sentry::getUser()->first_name }}
      			<b class="caret"></b>
      		</a>
      		<ul class="dropdown-menu" role="menu">
      			@if(Sentry::getUser()->hasAccess('admin'))
      			<li><a href="{{ route('admin') }}"><i class="icon-cog"></i> Administration</a></li>
      			@endif
      			<li {{ (Request::is('account/profile') ? ' class="active"' : '') }}><a href="{{ route('profile') }}"><i class="icon-user"></i> Your profile</a></li>
			<li{{ Request::is('account/change-password') ? ' class="active"' : '' }}><a href="{{ URL::route('change-password') }}">Change Password</a></li>
			<li{{ Request::is('account/change-email') ? ' class="active"' : '' }}><a href="{{ URL::route('change-email') }}">Change Email</a></li>
      			<li class="divider"></li>
      			<li><a href="{{ route('logout') }}"><i class="icon-off"></i> Logout</a></li>
      		</ul>
      	</li>
      	@else
      	<li {{ (Request::is('auth/signin') ? 'class="active"' : '') }}><a href="{{ route('signin') }}">Sign in</a></li>
      	<li {{ (Request::is('auth/signup') ? 'class="active"' : '') }}><a href="{{ route('signup') }}">Sign up</a></li>
      	@endif

        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	
		<!-- Container -->
		<div class="container" style="min-height:500px;">


			<!-- Notifications -->
			@include('frontend/notifications')

			<!-- Content -->
			@yield('content')

			<hr />

		
		</div>
		<!-- Footer -->
		<footer>
			<p>&copy; Company {{ date('Y') }}</p>
		</footer>
		<!-- Javascripts
		================================================== -->
		<script src="{{asset('assets/js/jquery.1.10.2.min.js') }}"></script>
		<script src="{{asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
	</body>
</html>
