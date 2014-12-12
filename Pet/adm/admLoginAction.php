<?php 
session_start();
include '../CLS/ConexaoClass.php';
include '../CLS/admClass.php';

if(isset($_POST['administrador']))
	$login=$_POST["administrador"];
if(isset($_POST["senha"]))
	$senha=$_POST["senha"];

if(!(empty($login))or!(empty($senha)))
{
	$adm= new admClass();
	$adm-> mostrarUm($login);
	
		if($Linha = mysql_fetch_array($adm-> getConsulta()))
		{
			
			
			if($senha==$Linha['senhaAdmin'])
			{
				$idAdm=$Linha['idAdm'];
				$_SESSION['idSessao']=$idAdm;
				$_SESSION['login']=$Linha['loginAdmin'];
				header("location:admIndex.php");
			}
			else
			{
				$java = '<script type="text/javascript">
				alert("Senha incorreta");
				window.location.href=("admLoginForm.html");
				</script>';
				echo($java);
				?><p><a href="login.php"><font color="#1C26A8">Voltar</a><?php
			}
		}else
		{
				$java = '<script type="text/javascript">
				alert("Usuario incorreto");
				window.location.href=("admLoginForm.html");
				</script>';
				echo($java);
				?><p><a href="login.php"><font color="#1C26A8">Voltar</a><?php
		}
}
?>