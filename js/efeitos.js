/**
 * ROLAGEM SUAVE
 */

 var $doc = $('html, body');
 $('.scroll-suave').click(function() {
  $doc.animate({
     scrollTop: $( $.attr(this, 'href') ).offset().top
 }, 500);
  return false;
});

/**
 * BOTÃO DE VOLTAR AO TOPO
 */

 jQuery(document).ready(function() {
            // Exibe ou oculta o botão
            jQuery(window).scroll(function() {
            	if (jQuery(this).scrollTop() > 200) {
            		jQuery('.voltar-ao-topo').fadeIn(200);
            	} else {
            		jQuery('.voltar-ao-topo').fadeOut(200);
            	}
            });
            
            // Faz animação para subir
            jQuery('.voltar-ao-topo').click(function(event) {
            	event.preventDefault();
            	jQuery('html, body').animate({scrollTop: 0}, 300);
            })
        });

/**
 * MASCARÁ NO TELEFONE DO FORMULÁRIO
 */

 $("#telefone").mask("(00) 0000-00000");

 /**
  * AVISO QUE A LOJA ESTÁ EM CONSTRUÇÃO
  */

  $("#blog-manutencao").click(function(event) {
    event.preventDefault();
    alert("Nosso blog está em construção, em breve artigos exclusivos para você!");
    window.location.href = "#contato";
});
