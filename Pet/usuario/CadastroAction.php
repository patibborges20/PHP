<?php
include '../CLS/ConexaoClass.php';
include '../CLS/UserClass.php';
	
	$usuarios = new UserClass();
	$login=$_POST["usuario"];
	$telefone=$_POST["telefone"];
	$senha=$_POST["senha"];
	$email=$_POST["email"];
	
	$usuarios-> insere($login,$telefone,$senha,$email);
	
	header("location:../index.html"); 
	
?>