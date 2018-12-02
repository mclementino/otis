<?php include('inc/header.php') ?>
<body class="bg-faq">
	<div class="mobile">
		<a class="button-container" id="toggle"> 
			<span class="top"></span> 
			<span class="middle"></span> 
			<span class="bottom"></span> 
		</a>
	</div>
	<header class="header">			
		<div class="header-top rosa-2">		
			<div class="container-fluid">
				<div class="row">
					<h1 class="header-title"><span class="subtitle-2">ajuda</span>Qual a sua dúvida?</h1>
				</div>
			</div>
		</div>				
	</header>	
	<div class="wrap">
		<div class="container-fluid">
			<?php include('inc/menu.php') ?>
			
			<div class="content content-2">
				<div class="row">
					<div class="col-md-7 col-sm-7">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<i class="more-less glyphicon glyphicon-minus"></i>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put coffee nulla assumenda shoreditch et.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<i class="more-less glyphicon glyphicon-plus"></i>
											Placeat dolorem repudiandae deserunt dolores delectus et molestias necessitatibus.
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil craft beer sapiente ea proident. Ad vegan excepteur butcher lomo. 
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<i class="more-less glyphicon glyphicon-plus"></i>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't VHS.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-5">
						<form>
							<div class="form-group">
								<p class="msg">Sua dúvida não está aqui?<br>Envie uma mensagem pra gente!</p>
							</div>
							<div class="form-group">
								<textarea class="form-control textarea" rows="4" placeholder="Mensagem..."></textarea>
							</div>
							<div class="form-group">
								<input type="button" value="enviar" class="botao botao-xs-width">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('inc/footer.php') ?>