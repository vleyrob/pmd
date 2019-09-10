<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Playfair+Display:700,700i,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dark.css" type="text/css" />

	<!-- Home Demo Specific Stylesheet -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/demos/pmd/interior-design.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" type="text/css" />

	<!-- Reader's Blog Demo Specific Fonts -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/demos/pmd/css/fonts.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colors.php?color=fcd307" type="text/css" />



<style>
body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li:hover a, body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li.current a, 
body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li:hover a, body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li.current a, 
#primary-menu ul ul li:hover > a, #primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title:hover > a, 
#primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title > a:hover { color:#fff !important}
#primary-menu.style-2 > div > ul > li > a:hover {color:#fff !important;}
#primary-menu ul > li > a:hover { color:#fff !important; }

@media only screen and (max-width: 991px)
body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li:hover a, body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li.current a, body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li:hover a, body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li.current a, #primary-menu ul ul li:hover > a, #primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title:hover > a, #primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title > a:hover {
    color: #fff !important;
}
</style>	<!-- Document Title
	============================================= -->
	<title>PMD Comunciación</title>

</head>

<body class="stretched side-push-panel">

	<div id="side-panel">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget clearfix">

				<h4 class="t400">Login</h4>

			
				<div class="line line-sm"></div>

				<form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

					<div class="col_full">
						<label for="login-form-username" class="t400">Nombre de usario:</label>
						<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
					</div>

					<div class="col_full">
						<label for="login-form-password" class="t400">Contraseña:</label>
						<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
					</div>

					<div class="col_full nobottommargin">
						<button class="button button-rounded t400 nomargin" id="login-form-submit" name="login-form-submit" value="login">Ingresar</button>
						<a href="#" class="text-muted fright">Olvidé mi contraseña</a>
					</div>

				</form>


			</div>

		</div>

	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<div class="market-header clearfix">

						<div>
							<!-- Logo
							============================================= -->
							<div id="logo">
								<a href="<?php echo get_site_url(); ?>" class="standard-logo"><img src="<?php echo get_template_directory_uri(); ?>/demos/pmd/images/logo.png" alt="PMD Logo"></a>
								<a href="<?php echo get_site_url(); ?>" class="retina-logo"><img src="<?php echo get_template_directory_uri(); ?>/demos/pmd/images/logo@2x.png" alt="PMD Logo"></a>
							</div><!-- #logo end -->

						</div>

						<div>
							<!-- Primary Navigation
							============================================= -->
							<nav id="primary-menu" class="with-arrows clearfix">

								<ul class="one-page-menu">
									<li><a href="<?php echo get_site_url(); ?>"><div>Inicio</div></a></li>
                                    <li><a href="#" data-scrollto="#section-servicios" data-easing="easeInOutExpo" data-speed="1250" data-offset="160"><div>Servicios</div></a></li>
									<li><a href="#" data-scrollto="#section-proyectos" data-easing="easeInOutExpo" data-speed="1250" data-offset="160"><div>Proyectos</div></a></li>
									<li><a href="#" data-scrollto="#section-contacto" data-easing="easeInOutExpo" data-speed="1250" data-offset="160"><div>Contacto</div></a></li>
								</ul>
							</nav><!-- #primary-menu end -->
						</div>
						<div>
							<!-- Top Search
							============================================= -->
							<div id="side-panel-trigger" class="side-panel-trigger">
								<a href="#" class="d-block d-lg-none"><i class="icon-line-lock"></i></a>
								<a href="#" class="d-none d-lg-block">Login <i class="icon-line-arrow-right"></i></a>
							</div><!-- #top-search end -->
						</div>
					</div>
				</div>

			</div>

		</header><!-- #header end -->