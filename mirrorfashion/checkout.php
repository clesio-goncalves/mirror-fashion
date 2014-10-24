	<?php
		$conexao = mysqli_connect("127.0.0.1", "root", "123", "WD43");
		$dados = mysqli_query($conexao, "SELECT nome, preco FROM produtos WHERE id = $_POST[id]");
		$produto = mysqli_fetch_array($dados);
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Checkout Mirror Fashion</title>
	<link rel="stylesheet" href="css/bootstrap-flatly.css">
	<link rel="stylesheet" href="css/checkout.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>

	<?php include '_navbar.php';?>

	<div class="jumbotron">
		<div class="container">
			<h1>Ótima escolha!</h1>
			<p>Obrigado por comprar na Mirror Fashion!
			Preencha seus dados para efetivar a compra.</p>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
					
			<div class="col-sm-4 col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Sua compra</h2>
					</div>
					<div class="panel-body">
						<img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" alt="<?= $produto["nome"] ?>" class="img-thumbnail img-responsive hidden-xs">
						
						<dl>
							<dt>Produto</dt>
							<dd><?= $produto["nome"] ?></dd>
								
							<dt>Cor</dt>
							<dd><?= $_POST["cor"] ?></dd>
						
							<dt>Tamanho</dt>
							<dd><?= $_POST["tamanho"] ?></dd>
						
							<dt>Preço</dt>
							<dd><?= $produto["preco"] ?></dd>
						</dl>
					</div>
				</div>
			</div>
			
			<form action="efetivar.php" method="POST" class="col-sm-8 col-lg-9">
				<div class="row">
					<fieldset class="col-md-6">
						<legend>Dados pessoais</legend>
						
						<div class="form-group">
							<label for="nome">Nome completo</label>
							<input type="text" class="form-control" id="nome" name="nome" autofocus required>				
						</div>
						
						<div class="form-group">
							<label for="email">Email</label>
							
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
							</div>	
						</div>
						
						<div class="form-group">
							<label for="cpf">CPF</label>
							<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
						</div>
						
						<div class="checkbox">
							<label>
								<input type="checkbox" value="sim" name="span" checked>
								Quero receber spam da Mirror Fashion
							</label>
						</div>
					</fieldset>
					
					<fieldset class="col-md-6">
						<legend>Cartão de crédito</legend>
						
						<div class="form-group">
							<label for="numero-cartao">Número - CVV</label>
							<input type="text" class="form-control" id="numero-cartao" name="numero-cartao" placeholder="0000 0000 0000 0000 - 000" data-mask="9999 9999 9999 9999 - 999">
						</div>
						
						<div class="form-group">
							<label for="validade-cartao">Validade</label>
							<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
						</div>
					</fieldset>
				</div>
				
				<div class="row">
					<fieldset class="col-md-6">
						<legend>Endereço entrega</legend>
						
						<div class="form-group">
							<label for="rua-entrega">Rua, número e complemento</label>
							<input type="text" class="form-control" id="rua-entrega" name="rua-entrega">
						</div>
						
						<div class="form-group">
							<label for="cep-entrega">CEP</label>
							<input type="text" class="form-control" id="cep-entrega" name="cep-entrega" placeholder="00000-000" data-mask="99999-99">
						</div>
		
						<div class="form-group">
							<label for="cidade-entrega">Cidade</label>
							<input type="text" class="form-control" id="cidade-entrega" name="cidade-entrega">
						</div>
						
						<div class="form-group">
							<label for="estado-entrega">Estado</label>
							<select name="estado-entrega" id="estado-entrega" class="form-control">
								<option value="PI">Piauí</option>
								<option value="SP">São Paulo</option>
								<option value="RJ">Rio de Janeiro</option>
							</select>
						</div>
					</fieldset>
					
					<fieldset id="endereco-cobranca" class="col-md-6">
						<legend>
							Endereço cobrança
						</legend>
						
						<div class="form-group">
							<label for="rua-cobranca">Rua, número e complemento</label>
							<input type="text" class="form-control" id="rua-cobranca" name="rua-cobranca">
						</div>
						
						<div class="form-group">
							<label for="cep-cobranca">CEP</label>
							<input type="text" class="form-control" id="cep-cobranca" name="cep-cobranca"  placeholder="00000-000" data-mask="99999-99">
						</div>
						
						<div class="form-group">
							<label for="cidade-cobranca">Cidade</label>
							<input type="text" class="form-control" id="cidade-cobranca" name="cidade-cobranca">
						</div>
		
						<div class="form-group">
							<label for="estado-cobranca">Estado</label>
							<select name="estado-cobranca" id="estado-cobranca" class="form-control">
								<option value="PI">Piauí</option>
								<option value="SP">São Paulo</option>
								<option value="RJ">Rio de Janeiro</option>
							</select>
						</div>
					</fieldset>
				</div>
					
				<button type="submit" class="btn btn-primary btn-lg pull-right">
					<span class="glyphicon glyphicon-thumbs-up"></span>
					Confirmar Pedido
				</button>
			</form>
		</div>	
	</div>
	
	<?php include '_modal.php'; ?>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/checkout.js"></script>
	<script src="js/inputmask-plugin.js"></script>
</body>
</html>