<?php
include '../../CLS/ConexaoClass.php';
include '../../CLS/UserClass.php';
include '../../CLS/petClass.php';
include '../../CLS/agendaClass.php'
?>
<?php
	$user = new UserClass();
	$pet = new petclass();
	$agenda= new agendaClass();
	$codigo=base64_decode($_GET['Cod']);
	$pet->mostrar($codigo);
	while($Linha = mysql_fetch_array($pet-> getConsulta()))
	{
		$idPet=($Linha['idPet']);
		$agenda-> deletapet($idPet);
		unlink('../../imagens/fotoPets/'.$idPet.'.jpg');	
	}
		
	session_start();
	@session_destroy();
	unset ($_SESSION['idSessao']);
	$pet->deletaUsuario($codigo); //Deletar todos os pets relacionados ao usuario

  	$user-> deleta($codigo);
 	$java = '<script type="text/javascript">
				alert("Sua aa conta esta sendo desativada!");
				window.location.href=("../../index.html");
	</script>';
	echo $java;
?>