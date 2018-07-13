<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	
	<!-- CSS Personalizado -->
	<link rel="stylesheet" type="text/css" href="css/master.css">

	<!-- Animações -->
	<link rel="stylesheet" type="text/css" href="css/animation.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	
	<!-- Google Fonts - Montserrat -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">

	<title>Dashboard</title>
</head>
<body>
	<header>

		<aside>
			<nav>
				<div class="brand">
					<h1>Sistemas de Vendas</h1>
					<small>v0.1</small>
				</div>
				<ul>
					<li class="nav-item"> <i class="fas fa-user"></i> Cliente</li>
					<ul class="sub-nav">
						<li class="sub-nav-item">
							<i class="fas fa-plus"></i>
							<a href="#">Novo Cliente</a>
						</li>
						<li class="sub-nav-item">
							<i class="fas fa-list-ul"></i>
							<a href="#">Listar Clientes</a>
						</li>
						<li class="sub-nav-item">
							<i class="fas fa-search"></i>
							<a href="#">Pesquisar Clientes</a>
						</li>
					</ul>

					<li class="nav-item"> <i class="fas fa-archive"></i> Produto</li>
					<ul class="sub-nav">
						<li class="sub-nav-item">
							<i class="fas fa-plus"></i>
							<a href="#">Novo Produto</a>
						</li>
						<li class="sub-nav-item">
							<i class="fas fa-list-ul"></i>
							<a href="#">Listar Produtos</a>
						</li>
						<li class="sub-nav-item">
							<i class="fas fa-search"></i>
							<a href="#">Pesquisar Produtos</a>
						</li>
					</ul>

					<li class="nav-item"> <i class="fas fa-shopping-cart"></i> Venda</li>
					<ul class="sub-nav">
						<li class="sub-nav-item">
							<i class="fas fa-plus"></i>
							<a href="#">Nova Venda</a>
						</li>
						<li class="sub-nav-item">
							<i class="fas fa-list-ul"></i>
							<a href="#">Listar Vendas</a>
						</li>
						<li class="sub-nav-item">
							<i class="fas fa-search"></i>
							<a href="#">Pesquisar Vendas</a>
						</li>
					</ul>

					<li class="nav-item"> <i class="fas fa-money-bill-alt"></i> Pagamento</li>
					<ul class="sub-nav">
						<li class="sub-nav-item">
							<i class="fas fa-money-bill-alt"></i>
							<a href="#">Receber Pagamento</a>
						</li>
						<li class="sub-nav-item">
							<i class="fas fa-money-bill-alt"></i>
							<a href="#">Verificar Pagamento</a>
						</li>
						<li class="sub-nav-item">
							<i class="fas fa-money-bill-alt"></i>
							<a href="#">Últimos Pagamentos</a>
						</li>
					</ul>
				</ul>
				
			</nav>
		</aside>
	</header>

	<div class="content">
		<div class="boxes">
			<div class="box green">
				<div class="pool"> POOLED </div>
			</div>

			<div class="box orange">
				<input type="search" name="pesquisar" placeholder="Pesquisar">
			</div>

			<div id="message-notify" class="box message red">	
				<i class="fas fa-envelope" data-dropdown="message"></i>
				<i class="fas fa-bell" data-dropdown="notification"></i>
				
				<div id="dropdown-message" class="dropdown bg-dd-red">
					<ul>
						<a href="#">Mensagem 1</a>
						<a href="#">Mensagem 2</a>
						<a href="#">Mensagem 3</a>
						<a href="#">Mensagem 4</a>
					</ul>
				</div>

				<div id="dropdown-notification" class="dropdown bg-dd-red">
					<ul>
						<a href="#">Notificação 1</a>
						<a href="#">Notificação 2</a>
						<a href="#">Notificação 3</a>
						<a href="#">Notificação 4</a>
						<a href="#">Notificação 5</a>
					</ul>
				</div>
			</div>

			<div class="box blue">
				<div class="user" data-dropdown="user">
					Usuário
					<i class="fas fa-angle-down"></i>
	
				</div>
				<div id="dropdown-user" class="dropdown bg-dd-blue">
					<ul>
						<li><a href="#">Perfil</a></li>
						<li><a href="#">Sair</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="boxes-info">
			<div class="box-info green">
				<div class="box-info-icon">
					<i class="fas fa-user"></i>
				</div>
				<div class="box-info-title">Clientes</div>
				<div class="box-info-value">42</div>
			</div>

			<div class="box-info red">
				<div class="box-info-icon"> 
					<i class="fas fa-shopping-cart"></i>
				</div>
				<div class="box-info-title">Total de Vendas</div>
				<div class="box-info-value">122</div>
			</div>

			<div class="box-info blue">
				<div class="box-info-icon">
					<i class="fas fa-money-bill-alt"></i>
				</div>
				<div class="box-info-title">Valor das Vendas</div>
				<div class="box-info-value">R$ 3.324,50</div>
			</div>

			<div class="box-info orange">
				<div class="box-info-icon">
					<i class="fas fa-money-bill-alt"></i>
				</div>
				<div class="box-info-title">Ticket Médio</div>
				<div class="box-info-value">R$ 27,25</div>
			</div>
		</div>
	</div>
	


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/menuHamburger.js"></script>
	<script type="text/javascript" src="js/dropdown.js"></script>
</body>
</html>