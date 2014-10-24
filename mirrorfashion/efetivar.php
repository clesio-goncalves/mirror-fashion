	<?php
		mail("$_POST[email]", "Compra efetuada na Mirror Fashion", "$_POST[nome], sua compra foi efetivada. Obrigado!")
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Efetivar compra</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<?php include '_navbar.php';?>

	<div class="jumbotron">
		<div class="container">
			<h1>Ótima escolha!</h1>
			<p><?= $_POST[nome]?>, sua compra foi efetivada.
			Obrigado por comprar na Mirror Fashion!</p>
		</div>
	</div>
	
	<?php include '_modal.php'; ?>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>
