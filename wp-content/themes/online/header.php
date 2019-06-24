<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div id="indentificador-header" class="container">

					<!--header mobil-->

					<div id="mobile">
						<div class="row" id="mob">
							<div class="col-3">
								<a class="txt-search" data-toggle="collapse" href="#search" role="button" aria-expanded="false" aria-controls="search">
									<i class="fas fa-search"></i>
								</a>
							</div>
							<div class="col-6 text-center">
								<img width="120px" src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" alt=""/>
							</div>
							<div class="col-3">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span> <span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
						</div>
						<div class="navbar-collapse offset collapse" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav header-auto">
								<li class="nav-item">
									<a href="http://localhost/online/index/" class="nav-link">INICIO</a>
								</li>
								<li class="nav-item">
									<a href="http://localhost/online/licenciaturas/" class="nav-link">LICENCIATURAS</a>
								</li>
								<li class="nav-item">
									<a href="http://localhost/online/posgrados/" class="nav-link">POSGRADOS</a>
								</li>
								<li class="nav-item">
									<a href="http://localhost/online/diplomados/" class="nav-link">DIPLOMADOS</a>
								</li>
								<li class="nav-item">
									<a href="http://localhost/online/cursos/" class="nav-link">CURSOS</a>
								</li>
								<li class="nav-item">
									<a href="http://localhost/online/conocenos/" class="nav-link">CONOCENOS</a>
								</li>
								<li class="nav-item">
									<a href="http://localhost/online/faqs/" class="nav-link">FAQ´s</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link"></a>
									
								</li>
							</ul>
							<div class="row" id="div-icons-mobil">
								<div class="col-4">
									<a href="#" class="icon-mobil">
										<i class="icon-doorIcon" style="font-size: 25px;"></i>
									</a>
								</div>
								<div class="col-4">
									<a href="#" class="icon-mobil">
										<i class="icon-bookIcon" style="font-size: 25px;"></i>
									</a>
								</div>
								<div class="col-4">
									<a href="#" class="icon-mobil">
										<i class="icon-userIcon" style="font-size: 25px;"></i>
									</a>
								</div>
								<div class="col-4">
									<a href="#" class="icon-mobil">
										<i class="icon-whatsIcon" style="font-size: 25px;"></i>
									</a>
								</div>
								<div class="col-4">
									<a href="#" class="icon-mobil">
										<i class="icon-twitIcon" style="font-size: 25px;"></i>
									</a>
								</div>
								<div class="col-4">
									<a href="#" class="icon-mobil">
										<i class="icon-faceIcon" style="font-size: 25px;"></i>
									</a>
								</div>
							</div>
						</div>	
					</div>

					<!--header tablet-->
					
					<div class="row" id="tablet">
						<div class="col-md-12 text-center">
							<img width="180px" src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" alt=""/>
						</div>
						<div class="col-md-12" style="margin-top: 10px;">
							<div class="navbar-collapse offset collapse" id="navbarSupportedContent">
								<ul class="nav navbar-nav menu_nav header-auto">
									<li class="nav-item">
										<a href="http://localhost/online/index/" class="nav-link">INICIO</a>
									</li>
									<li class="nav-item">
										<a href="http://localhost/online/licenciaturas/" class="nav-link">LICENCIATURAS</a>
									</li>
									<li class="nav-item">
										<a href="http://localhost/online/posgrados/" class="nav-link">POSGRADOS</a>
									</li>
									<li class="nav-item">
										<a href="http://localhost/online/diplomados/" class="nav-link">DIPLOMADOS</a>
									</li>
									<li class="nav-item">
										<a href="http://localhost/online/cursos/" class="nav-link">CURSOS</a>
									</li>
									<li class="nav-item">
										<a href="http://localhost/online/conocenos/" class="nav-link">CONOCENOS</a>
									</li>
									<li class="nav-item">
										<a href="http://localhost/online/faqs/" class="nav-link">FAQ´s</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link"></a>
										
									</li>
									<li class="nav-item" style="margin-right: 15px;">
										<div class="badge">
											<a href="#" class="nav-link">
												<i class="icon-doorIcon" style="font-size: 25px;"></i>
											</a>
										</div>
									</li>
									<li class="nav-item" style="margin-right: 15px;">
										<div class="badge">
											<a href="#" class="nav-link">
												<i class="icon-bookIcon" style="font-size: 25px;"></i>
											</a>
										</div>
									</li>
									<li class="nav-item" style="margin-right: 15px;">
										<div class="badge">
											<a href="#" class="nav-link">
												<i class="icon-userIcon" style="font-size: 25px;"></i>
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!--header desktop-->

					<div class="row" id="desktop" style="width: 100%;">
						<a class="navbar-brand logo_h" href="index.html">
							<img class="img_logo" style="display: none;" src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png" alt=""/>
						</a>
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item">
									<a href="http://localhost/online/index/" class="nav-link">INICIO</a>
								</li>
								<li class="nav-item">
									<a href="http://localhost/online/licenciaturas/" class="nav-link">LICENCIATURAS</a>
								</li>
								<li class="nav-item">
									<a href="http://localhost/online/posgrados/" class="nav-link">POSGRADOS</a>
								</li>
								<li class="nav-item">
									<a href="http://localhost/online/diplomados/" class="nav-link">DIPLOMADOS</a>
								</li>
								<li class="nav-item">
									<a href="http://localhost/online/cursos/" class="nav-link">CURSOS</a>
								</li>
								<li class="nav-item">
									<a href="http://localhost/online/conocenos/" class="nav-link">CONOCENOS</a>
								</li>
								<li class="nav-item">
									<a href="http://localhost/online/faqs/" class="nav-link">FAQ´s</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link"></a>
									
								</li>
								<li class="nav-item" style="margin-right: 15px;">
									<div class="badge">
										<a href="#" class="nav-link">
											<i class="icon-doorIcon" style="font-size: 25px;"></i>
										</a>
									</div>
								</li>
								<li class="nav-item" style="margin-right: 15px;">
									<div class="badge">
										<a href="#" class="nav-link">
											<i class="icon-bookIcon" style="font-size: 25px;"></i>
										</a>
									</div>
								</li>
								<li class="nav-item" style="margin-right: 15px;">
									<div class="badge">
										<a href="#" class="nav-link">
											<i class="icon-userIcon" style="font-size: 25px;"></i>
										</a>
									</div>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</nav>
			<div class="social" id="div-social">
				<ul>
					<li><a href="#" target="_blank" class="icon-whatsIcon"></a></li>
					<li><a href="#" target="_blank" class="icon-faceIcon"></a></li>
					<li><a href="#" target="_blank" class="icon-twitIcon"></a></li>
				</ul>
			</div>
			<hr class="line-header mt-0">
			<div class="collapse multi-collapse" id="search">
				<div class="card">
					<div class="search_input" id="search_input_box">
						<div class="container">
							<form class="d-flex justify-content-between" method="" action="">
								<input type="text" class="form-control" id="search_input" placeholder="Qué desea buscar"/>
								<button type="submit" class="btn"></button>
								<span class="ti-close" id="close_search" data-toggle="collapse" href="#search" role="button" aria-expanded="false" aria-controls="search"></span>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

		