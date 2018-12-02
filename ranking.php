<?php include('inc/header.php') ?>
<body>
	<div class="mobile">
		<a class="button-container" id="toggle"> 
			<span class="top"></span> 
			<span class="middle"></span> 
			<span class="bottom"></span> 
		</a>
	</div>
	<header class="header">			
		<div class="header-top gray">		
			<div class="container-fluid">
				<div class="row">
					<h1 class="header-title"><span class="subtitle-1">ranking</span>Como você está indo?</h1>
				</div>
			</div>
		</div>		
		<div class="header-bottom-ranking gray-light">		
			<div class="container-fluid">
				<div class="row">
					<a href="#" class="botao botao-sm-gray">aprendizes</a>
					<a href="#" class="botao botao-sm-gray active">mestres</a>
					<a href="#" class="botao botao-sm-gray">oráculos</a>
				</div>
			</div>
		</div>
	</header>	
	<div class="wrap">
		<div class="container-fluid">
			<?php include('inc/menu.php') ?>
			
			<div class="content content-1 bg-ranking">
				<div class="media ranking">
					<div class="media-left">
						<span class="ranking-number black">1</span>
						<img src="assets/imgs/user.jpg" alt="" class="avatar-media shadow-gray">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Leandro de Freitas</h4>
						<h5 class="media-heading-xs">Mestre</h5>						
						<div class="progress-outer">
							<div class="star">3</div>
							<div class="progress">							
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
									<span class="points">3213 /</span> 5000
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="media ranking">
					<div class="media-left">
						<span class="ranking-number black">2</span>
						<img src="assets/imgs/user.jpg" alt="" class="avatar-media shadow-gray">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Leandro de Freitas</h4>
						<h5 class="media-heading-xs">Mestre</h5>
						<div class="progress-outer">
							<div class="star">7</div>
							<div class="progress">							
								<div class="progress-bar" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width: 91%;">
									<span class="points">3213 /</span> 5000
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="media ranking">
					<div class="media-left">
						<span class="ranking-number rosa">3</span>
						<img src="assets/imgs/user.jpg" alt="" class="avatar-media shadow-gray">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Leandro de Freitas</h4>
						<h5 class="media-heading-xs">Mestre</h5>
						<div class="progress-outer">
							<div class="star">3</div>
							<div class="progress">							
								<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
									<span class="points">3213 /</span> 5000
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="media ranking">
					<div class="media-left">
						<span class="ranking-number gray-dark">4</span>
						<img src="assets/imgs/user.jpg" alt="" class="avatar-media shadow-gray">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Leandro de Freitas</h4>
						<h5 class="media-heading-xs">Mestre</h5>
						<div class="progress-outer">
							<div class="star">5</div>
							<div class="progress">							
								<div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
									<span class="points">3213 /</span> 5000
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="media ranking">
					<div class="media-left">
						<span class="ranking-number black">5</span>
						<img src="assets/imgs/user.jpg" alt="" class="avatar-media shadow-gray">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Leandro de Freitas</h4>
						<h5 class="media-heading-xs">Mestre</h5>
						<div class="progress-outer">
							<div class="star">1</div>
							<div class="progress">							
								<div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
									<span class="points">3213 /</span> 5000
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="media ranking">
					<div class="media-left">
						<span class="ranking-number rosa">6</span>
						<img src="assets/imgs/user.jpg" alt="" class="avatar-media shadow-gray">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Leandro de Freitas</h4>
						<h5 class="media-heading-xs">Mestre</h5>
						<div class="progress-outer">
							<div class="star">2</div>
							<div class="progress">							
								<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
									<span class="points">3213 /</span> 5000
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('inc/footer.php') ?>