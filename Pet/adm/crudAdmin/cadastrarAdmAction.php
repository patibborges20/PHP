<?php
include '../../CLS/ConexaoClass.php';
include '../../CLS/admClass.php';
	
	$adm = new admClass();
	$loginAdmin=$_POST["loginAdm"];
	$senhaAdmin=$_POST["senhaAdm"];
	$adm-> insere($loginAdmin,$senhaAdmin);
	
	header("location:../admIndex.php");
?>