$(document).ready(function(){

	/*
	 * Executa validacao do formulario de contato e faz o submit
	*/
	$("#enviar").click(function(){
    	if(validaFormContato()){
    		$("#enviar").submit();
    	}
    });

});

/*
 * Validacao do formulario de contato
*/
function validaFormContato() {
  return $("#form-contato").validate({
    rules: {
        nome: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        assunto: {
          required: true
        },
        mensagem: {
          required: true
        }
    },
    messages: {
      nome: {
        required: "Insira seu nome"
      },
      email: {
        required: "Insira seu e-mail",
        email: "E-mail inválido"
      },
      assunto: {
        required: "Insira o assunto"
      },
      mensagem: {
        required: "Escreva uma mensagem"
      }
    }
  });
}
