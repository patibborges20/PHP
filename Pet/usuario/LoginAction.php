<?php 
	session_start();
include '../CLS/ConexaoClass.php';
include '../CLS/UserClass.php';

if(isset($_POST['login']))
	$login=$_POST["login"];
if(isset($_POST["senha"]))
	$senha=$_POST["senha"];

if(!(empty($login))or!(empty($senha)))
{
	$user= new UserClass();
	$user-> mostrar($login);
	
		if($Linha = mysql_fetch_array($user-> getConsulta()))
		{
				
			if($senha==$Linha['senhaUsuario'])
			{
				$idUsuario=$Linha['idUsuario'];
				$_SESSION['idSessao']=$idUsuario;
				$_SESSION['login']=$Linha['LoginUsuario'];
				
				header("location:../logado/principal.php");
			}
			else
			{
				$java = '<script type="text/javascript">
				alert("Senha incorreta");
				window.location.href=("../index.html");
				</script>';
				echo($java);
				?><p><a href="login.php"><font color="#1C26A8">Voltar</a><?php
			}
		}else
		{
				$java = '<script type="text/javascript">
				alert("Usuario incorreto");
				window.location.href=("../index.html");
				</script>';
				echo($java);
		}
}
?>