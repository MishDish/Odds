<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editing Odds</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
	<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
	<header class="navbar navbar-static-top bs-docs-nav">
		<div class="container yes">
			<div class="navbar-header">
			<a href="#" class="navbar-brand">Bookmaker's Place</a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active">				
			      <a href="/">Home</a>
					</li>
					<li class="active">
					<a href="/odds/">Odds Management</a>				
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				@if(!Auth::guest())
				<!-- <span class="navbar-text navbar-right badge"> Howdy, {{ $user->name }} </span> -->
			    <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Howdy, {{ Auth::user()->name }} <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
				</ul>
				</li>
				@endif
			</nav>	
		</div><!--container-->
	</header>
  	<div class='content'>
  	  @include('errors.list')
	  @yield('content')
	 </div>   
	 <script type="text/javascript">
	  $("div.alert").delay(3000).slideUp(300);
	 </script>
</body>
<footer>
	<div class="footer">
		 <span> Misha Vuchikjevikj @2015</span>
	</div>
</footer>
</html>
