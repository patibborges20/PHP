<?php
	include '../../CLS/ConexaoClass.php';
	include '../../CLS/UserClass.php';
	$User= new UserClass();
	$codigo=$_POST['idUsuario'];
	$login=$_POST['LoginUsuario'];
	$telefone=$_POST['telefone'];
	$email=$_POST['email'];
	$senha=$_POST['senhaUsuario'];
	
	$User-> AlteraUsuario($codigo,$login,$telefone,$email,$senha);
	
		header("location:../principal.php");
		?>