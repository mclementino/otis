<?php include('inc/header.php') ?>
<body class="bg-lobby-2">
	<div class="mobile">
		<a class="button-container" id="toggle"> 
			<span class="top"></span> 
			<span class="middle"></span> 
			<span class="bottom"></span> 
		</a>
	</div>
	<header class="header">			
		<div class="header-top marrom-light">		
			<div class="container-fluid">
				<div class="row">
					<h1 class="header-title"><span class="subtitle-4">térreo</span>Bem vindo à OTIS</h1>
				</div>
			</div>
		</div>				
	</header>	
	<div class="wrap">
		<div class="container-fluid">
			<?php include('inc/menu.php') ?>
			
			<div class="content-7">								
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-2 col-sm-2 sala-right">
							<span class="sala-number">sala 1</span>
						</div>
						<div class="col-md-10 col-sm-10 sala-left">
							<div class="card card-video">
								<div class="card-caption-video">
									<h2 class="card-title">Bem-vindo à  empresa que mais move pessoas no mundo!</h2>									
								</div>
								<div class="video-item">
									<div class="embed-responsive embed-responsive-16by9">
										<video width="520" height="315" controls>
										  <source src="/assets/videos/JULIO_abertura tema.mp4" type="video/mp4">
										Your browser does not support the video tag.
										</video><!--<iframe width="560" height="315" src="https://www.youtube.com/embed/GSiEDgb9rNQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen></iframe>-->
									</div>
								</div>
								<div class="card-caption">
									<ul class="card-list">										
										<li>você já ganhou</li>
										<li>
											<span class="star-pontuation">+10</span>
										</li>
									</ul>								
									<ul class="card-list" style="margin-right:10px;">
										
										<li>
											<a href="terreo-ganhou.php" class="botao botao-small-brown-2">fechar</a>											
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('inc/footer.php') ?>