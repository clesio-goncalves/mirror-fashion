// Adiciona classe painel-compacto
$('.painel').addClass('painel-compacto');

// Evento do clique no botão, remover a classe painel-compacto fazendo o produto aparecer
$('.painel button').click(function(){
	$(this).parent().removeClass('painel-compacto');
});

// fazendo a associação da função com o evento
document.querySelector('#form-busca').onsubmit = function () {
	if (document.querySelector('#q').value == '') {
		document.querySelector('#form-busca').style.background = 'red';
		return false;
	}
};

<!-- BANNER -->
var banners = ["img/destaque-home.jpeg", "img/destaque-home-2.jpeg"];
var bannerAtual = 0;

function trocaBanner(){
	bannerAtual = (bannerAtual + 1) % 2;
	document.querySelector('.destaque img').src = banners[bannerAtual];
}

// agenda a execução
var timer = setInterval(trocaBanner, 4000);

var controle = document.querySelector('.pause');

controle.onclick = function() {
	if (this.className == 'pause') {
		clearInterval(timer);
		controle.className = 'play';
	} else {
		timer = setInterval(trocaBanner, 4000);
		controle.className = 'pause';
	}

	return false;
};