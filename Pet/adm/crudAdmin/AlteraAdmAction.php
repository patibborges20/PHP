<?php
	include '../../CLS/ConexaoClass.php';
	include '../../CLS/AdmClass.php';
	$adm= new admClass();
	$codigo=$_POST['idAdm'];
	$login=$_POST['loginAdmin'];
	$senha=$_POST['senhaAdmin'];
	
	$adm-> AlteraAdm($codigo,$login,$senha);
	
		header("location:../admIndex.php");
		?>