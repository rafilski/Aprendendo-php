<?php 

$nome = "Raphael";

function teste() {
	global $nome;
	echo $nome;
}

function teste2(){
	$nome = "Jão";
	echo $nome." agora no teste2";
}

teste();
teste2();

 ?>
