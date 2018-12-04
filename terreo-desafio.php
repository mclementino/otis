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
							<span class="star-pontuation-gd">+10</span>
							<span class="sala-number">desafio</span>
						</div>
						<div class="col-md-10 col-sm-10 col-desafio-media">							
							<div class="media desafio-media">
								<div class="media-body desafio-media-body">
									<div class="embed-responsive embed-responsive-16by9">
										<video width="520" height="315" controls>
										  <source src="/assets/videos/2017_OTIS_Culture_Subtitles_Portuguese_v1_1.mp4" type="video/mp4">
										Your browser does not support the video tag.
										</video><!--<iframe width="560" height="315" src="https://www.youtube.com/embed/GSiEDgb9rNQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen></iframe>-->
									</div>
								</div>
								<!--<div class="media-right media-middle desafio-media-right">
									<img src="assets/imgs/clock-gd.png" class="center-block">
									<span class="desafio-timer">3m54s</span>
									<div class="progress desafio-progress">							
										<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
									</div>
								</div>-->
							</div>
							<div class="desafio-pergunta">
								<h3 class="desafio-pergunta-title">#1. Os produtos da Otis no mundo todo são norteados por:</h3>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Sustentabilidade, Segurança e Durabilidade
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Sustentabilidade, Segurança e Confiabilidade
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Confiança, Segurança e Durabilidade
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Segurança, Durabilidade e Propósito
									</label>
								</div>
								     
							</div>
							<div class="desafio-pergunta">
								<h3 class="desafio-pergunta-title">#1. Acreditamos em nossa cultura que somos muitas vozes porque</h3>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Estamos presentes no mundo todo
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Sabemos que boas deias podem vir de qualquer pessoa - de qualquer lugar
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Contratamos somente pessoas expansivas e inovadoras
									</label>
								</div>
								<a href="#" class="botao botao-small-brown-2 pull-right">Confirma?</a>											
								<a href="terreo.php" class="botao botao-small-brown-2 pull-right">voltar</a>
								<div class="clearfix"></div>         
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('inc/footer.php') ?>