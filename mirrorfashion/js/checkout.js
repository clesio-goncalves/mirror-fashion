$('#endereco-cobranca .form-control').each(function(){
	var original = $('#' + this.name.replace('cobranca', 'entrega'));
	var copiado = $(this);
	
	copiado.val(original.val());
	
	original.on('change input', function() {
		copiado.val(original.val());
	});
});

// Email
document.querySelector('input[type=email]').oninvalid = function() {

	// remove mensagens de erro antigas
	this.setCustomValidity("");

	// reexecuta validação
	if (!this.validity.valid) {
		// se inválido, coloca mensagem de erro
		this.setCustomValidity("Email inválido");
	}
};