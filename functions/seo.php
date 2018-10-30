<?php 


function seo(){

	$url = basename($_SERVER['PHP_SELF']);

	$padrao = "";

	switch ($url) {

		case '': 
		case 'index.php':
		$titulo = "Geleias Flor de Lótus";
		$descricao = "";
		$palavra_chave = "";
		break;

		default:
		$titulo = "404 - Página não encontrada";
		$descricao = "";
		$palavra_chave = "";
		break;
	}

	return array ($titulo, $descricao, $palavra_chave);

}


?>