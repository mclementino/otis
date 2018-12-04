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
							<span class="sala-number">sala 2</span>
						</div>
						<div class="col-md-10 col-sm-10 sala-left">
							<div class="card">
								<figure class="card-media">
									<img src="assets/imgs/card-figure.png" alt="" class="img-responsive">
								</figure>
								<div class="card-caption">
									<h2 class="card-title">História da Otis</h2>
									<p class="card-text">Maior companhia do mundo na fabricação e prestação de serviços em elevadores, escadas e esteiras rolantes, traduz confiança e comprometimento em seus produtos e serviços. Há mais de 160 anos, quando Elisha Graves Otis inventou o elevador de segurança, estava alterando para sempre a vida urbana das cidades. A modernização é resultado de inovação, design sustentável de seus produtos e prestação diferenciada de serviço. A Otis está presente em mais de 200 países e territórios e é responsável por manter cerca de 1.9 milhão de elevadores e escadas ao redor do mundo.</p>
									<ul class="card-list">										
										<li>você já ganhou</li>
										<li>
											<span class="star-pontuation">+10</span>
										</li>
									</ul>									
									<ul class="card-list" style="margin-right:10px;">
										<!--<li>
											<span class="star-pontuation">+10</span>
										</li>-->
										<li>
											<a href="terreo.php" class="botao botao-small-brown-2">fechar</a>											
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