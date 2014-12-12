<?php

include '../../CLS/ConexaoClass.php';
include '../../CLS/agendaClass.php';
				
	$idPet=$_POST['idPet'];
	$horaEntrada=$_POST['HEntrada'];
	$horaSaida=$_POST['HSaida'];
	$status=$_POST['status'];
		
	if(!(empty($idPet)))
	{
		$agenda= new agendaClass();
		$agenda-> insere($idPet,$horaEntrada,$horaSaida,$status);
	}
	
     $id=base64_encode($idPet);
	header("Location:../principal.php?m=d&Cod=$id");
	?>