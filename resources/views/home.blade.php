<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>CellarHub</title>
	<link rel="icon" type="img" href="{{ mix('favicon.png') }}">
	<meta name="keywords" content="wine, cellar, laravel, mysql, web system" />
	<meta name="description" content="Web system to assist the management of the collection of wine bottles in cellars."/>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" />
	<link href="{{ mix('css/default.css') }}" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="{{route('home')}}"><img src="{{ mix('images/CellarHub.png') }}"></a></h1>
			</div>
			<div id="menu">
				<ul>
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="featured">&nbsp;</div>
	<div id="banner-wrapper">
		<div id="banner" class="container">
			<div class="box-left">
				<h2>CellarHub</h2>
				<span>Web system to assist the management of the collection of wine bottles in cellars.</span> </div>
			<div class="box-right"> <a href="#" class="button button-big">Login</a></div>
		</div>
	</div>
	<div id="wrapper">
		<div id="page" class="container">
			<div id="content">
				<div class="title">
					<h2>Welcome to CellarHub</h2>
					<span class="byline">Your winery management system.</span> </div>
				<p>This is <strong>CellarHub</strong>, an open source and academic project developed by students of the Federal Institute of Rio Grande do Norte (IFRN) designed for the management of wine collections in wineries. The CellarHub is released under the <a href="https://github.com/guilhermecostam/CellarHub/blob/main/LICENSE">MIT</a> license. Have fun!</p>
			</div>
			<div id="sidebar">
				<ul class="style1">
					<li>
						<h3>Contact us</h3>
						  <a href="https://www.linkedin.com/in/guilhermecostam/">
						    <img alt="LinkedIn" src="https://img.shields.io/badge/linkedin-%230077B5.svg?&style=for-the-badge&logo=linkedin&logoColor=white" />
						  </a>&nbsp;&nbsp;
						  
						  <a href="https://t.me/guilhermecostam">
						    <img alt="Telegram" src="https://img.shields.io/badge/-Telegram-2CA5E0?style=for-the-badge&logo=telegram&logoColor=white" />
						  </a>&nbsp;&nbsp;
						  
						  <a href="mailto:guilhermecostadev@gmail.com">
						    <img alt="Gmail" src="https://img.shields.io/badge/-Gmail-c14438?style=for-the-badge&logo=gmail&logoColor=white" />
						  </a>&nbsp;&nbsp;
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="copyright" class="container">
		<p>{{ date('Y') }} &copy; CellarHub. All rights reserved.</p>
	</div>
</body>
</html>
