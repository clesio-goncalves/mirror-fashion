<!DOCTYPE html>
<html<?= @$html; ?>>
<head>
	<meta charset="utf-8">
	<title><?= $cabecalho_title; ?></title>
	
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet/less" href="less/estilos.less">
	<?= @$cabecalho_css; ?>

	<meta name="viewport" content="width=device-width">
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header class="container">
		<h1>
			<img src="img/logo.jpeg" alt="Mirror Fashion">
		</h1>

		<p class="sacola">Nenhum item na sacola de compras</p>

		<nav class="menu-setores">
			<ul>
				<li><a href="#">Sua Conta</a></li>
				<li><a href="#">Lista de Desejos</a></li>
				<li><a href="#">Cartão Fidelidade</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>
			</ul>
		</nav>
	</header>