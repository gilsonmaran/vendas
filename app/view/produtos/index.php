<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	
	<!-- CSS Personalizado -->
	<link rel="stylesheet" type="text/css" href="css/master.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	
	<!-- Google Fonts - Montserrat -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:800" rel="stylesheet">

	<title>Produtos</title>
</head>
<body>
	<div class="container">
		<div class="form-box">

			<h2 class="form-title">Cadastro de Produto</h2>

			<form action="#" method="post">

				<div class="form-item">
					<label>Descrição</label>
					<input type="text" placeholder="Descrição do Produto" required>
				</div>

				<div class="form-item">
					<label>Categoria</label>
					<select name="categorias" required>
						<option selected>Categoria 1</option>
						<option>Categoria 2</option>
						<option>Categoria 3</option>
						<option>Categoria 4</option>
					</select>
				</div>

				<div class="form-item">
					<label>Valor Unitário</label>
					<input type="text" placeholder="Valor Unitário de Compra" required>
				</div>

				<div class="form-item">
					<label>Código de Barras</label>
					<input type="number" placeholder="Código de Barras" required>
				</div>

				<div class="form-item">
					<label>Fabricante</label>
					<input type="text" placeholder="Fabricante do Produto" required>
				</div>

				<input class="blue" type="submit" value="Cadastrar">
				<input class="blue" type="reset" value="Limpar">
				<button class="red">Cancelar</button>
			</form>

		</div>
	</div>


	<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>