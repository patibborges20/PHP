<?php
include '../../CLS/ConexaoClass.php';
include '../../CLS/agendaClass.php';
?>
<?php
	$agenda = new agendaClass();
	$codigo=base64_decode($_GET['Cod']);
	$idPet=$_GET['CodPet'];
  	$agenda-> deleta($codigo);
 	header("Location:../principal.php?m=d&Cod=". $idPet."");
	
	?>