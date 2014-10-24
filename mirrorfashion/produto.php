	<?php
		$conexao = mysqli_connect("127.0.0.1", "root", "123", "WD43");
		$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
		$produto = mysqli_fetch_array($dados);
	
		$html = ' itemscope itemtype="http://schema.org/Product"';
		$cabecalho_title = $produto["nome"];
		$cabecalho_css = '
		<link rel="stylesheet" href="css/produto.css">
		<meta property="og:title" content="Fuzzy Cardigan">
		<meta property="og:type" content="product">
		<meta property="og:url" content="http://mirrorfashion.net/loja/produto.html">
		<meta property="og:image" content="http://mirrorfashion.net/loja/img/produto-detalhe1.png">
		<meta property="og:site_name" content="Mirror Fashion">
		<meta property="og:description" content="O Fuzzy Cardigan é fantástico para a
		meia estação, quando o friozinho começa a chegar. Seu estilo parisiense
		combina com o charme da estação.">
		<meta itemprop="name" content="Fuzzy Cardigan">
		<meta itemprop="description" content="O Fuzzy Cardigan é fantástico para a
		meia estação, quando o friozinho começa a chegar. Seu estilo
		parisiense combina com o charme da estação.">
		<meta itemprop="image" content="http://mirrorfashion.net/loja/img/produto-detalhe1.png">
		'.
		"<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet'>";
		include '_cabecalho.php';
	?>

<div class="produto-back">
	<div class="container">
		<div class="produto">
			<h1><?= $produto["nome"] ?></h1>
			<h2>por apenas <?= $produto["preco"] ?></h2>
			<div class="fb-like" data-href="http://mirrorfashion.net/loja" data-send="false" data-layout="box_count" data-width="58" data-show-faces="false"></div>
			<a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a>
			<!-- Place this tag where you want the +1 button to render. -->
			<div class="g-plusone" data-size="tall"></div>

			<form action="checkout.php" method="POST">
				<fieldset class="cores">
					<legend> Escolha a cor: </legend>
		
					<input type="radio" name="cor" value="verde" id="verde" checked>
					<label for="verde">
						<img src="img/produtos/foto<?= $produto["id"] ?>-verde.png" alt="verde">
					</label>
					
					<input type="radio" name="cor" value="rosa" id="rosa">
					<label for="rosa"> 
						<img src="img/produtos/foto<?= $produto["id"] ?>-rosa.png" alt="rosa">
					</label>
					
					<input type="radio" name="cor" value="azul" id="azul"> 
					<label for="azul"> 
						<img src="img/produtos/foto<?= $produto["id"] ?>-azul.png" alt="azul">
					</label>
				
				</fieldset>
				
				<fieldset class="tamanhos">
					<legend>Escolha o tamanho:</legend>
					
					<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
					<output for="tamanho" name="valortamanho">42</output>
				</fieldset>
				
				<input type="hidden" name="id" value="<?= $produto["id"] ?>">
				<input type="submit" class="comprar" value="Comprar">
			</form>
		</div>
		
		<div class="detalhes">
			<h2>Detalhes do produto</h2>
			
			<p><?= $produto["descricao"] ?></p>
			
			<table>
				<thead>
					<tr>
						<th>Característica</th>
						<th>Detalhes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Modelo</td>
						<td>Cardigã 7845</td>
					</tr>
					<tr>
						<td>Material</td>
						<td>Algodão e poliester</td>
					</tr>
					<tr>
						<td>Cores</td>
						<td>Azul, Rosa e Verde</td>
					</tr>
					<tr>
						<td>Lavagem</td>
						<td>Lavar a mão</td>
					</tr>
				</tbody>
			</table>
			
		</div>		
	</div>
</div>

	<?php include '_rodape.php'; ?>
	
	<script src="js/jquery.js"></script>
	<script src="js/produto.js"></script>
	<script src="js/less.js"></script>
	
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<script>
		!function(d,s,id){
			var js,fjs=d.getElementsByTagName(s)[0];
			if(!d.getElementById(id)){
				js=d.createElement(s);js.id=id;
				js.src="http://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);
			}
		}(document,"script","twitter-wjs");
	</script>

	<!-- Place this tag after the last +1 button tag. -->
	<script type="text/javascript">
	  window.___gcfg = {lang: 'pt-BR'};
	
	  (function() {
	    var po = document.createElement('script'); 
	    po.type = 'text/javascript'; 
	    po.async = true;
	    po.src = 'https://apis.google.com/js/platform.js';
	    var s = document.getElementsByTagName('script')[0]; 
	    s.parentNode.insertBefore(po, s);
	  })();
	</script>
</body>
</html>