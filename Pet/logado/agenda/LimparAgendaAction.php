<?php
include '../../CLS/ConexaoClass.php';
include '../../CLS/agendaClass.php';
?>
<?php
	$agenda = new agendaClass();
	$idPet=base64_decode($_GET['Cod']);
  	$agenda-> deletaAgenda($idPet);
	$id= base64_encode($idPet);
 	header("Location:../principal.php?m=d&Cod=$id");
?>