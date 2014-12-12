<?php
	include '../../CLS/ConexaoClass.php';
	include '../../CLS/UserClass.php';
	$User= new UserClass();
	$codigo=$_POST['idUsuario'];
	$login=$_POST['LoginUsuario'];
	$telefone=$_POST['telefone'];
	$email=$_POST['email'];
	$senha=$_POST['senhaUsuario'];
	$senhaAnt=$_POST['senhaAntiga'];
	
	$User-> mostrarViaID($codigo);
	
		if($Linha = mysql_fetch_array($User-> getConsulta()))
		{
				
			if($senhaAnt==$Linha['senhaUsuario'])
			{
				$User-> AlteraUsuario($codigo,$login,$telefone,$email,$senha);
				
				$java = '<script type="text/javascript">
				window.location.href=("../admIndex.php");
				</script>';
				echo($java);
				
			}
			else
			{
				$java = '<script type="text/javascript">
				alert("Senha incorreta");
				window.location.href=("../admIndex.php");
				</script>';
				echo($java);	
			}
		}
		?>