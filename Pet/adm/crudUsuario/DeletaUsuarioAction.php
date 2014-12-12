<?php
include '../../CLS/ConexaoClass.php';
include '../../CLS/UserClass.php';
include '../../CLS/agendaClass.php';
include '../../CLS/petClass.php';

?>
<?php
	$pet = new petclass();
	$agenda= new agendaClass();
	$user = new UserClass();
	$codigo=base64_decode($_GET['Cod']);
	$pet->mostrar($codigo);
	
		while($Linha = mysql_fetch_array($pet-> getConsulta()))
		{
			$agenda-> deletaAgenda($Linha['idPet']);		
		}
	$pet->deletaUsuario($codigo); //Deletar todos os pets relacionados ao usuario
  	$user-> deleta($codigo);
 	header("location:../admIndex.php");	
?>