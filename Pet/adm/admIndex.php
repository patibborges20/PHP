<!doctype html>
<html>

	<head>
			<meta charset="utf-8"><link rel="stylesheet" type="text/css" href="../CSS/Stilo.css">
			<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
			<link href="../css/skel.css" rel="stylesheet" type="text/css">
			<link href="../css/style.css" rel="stylesheet" type="text/css">
			<link href="../css/style-mobile.css" rel="stylesheet" type="text/css">
			<link href="../css/style-normal.css" rel="stylesheet" type="text/css">
			<link href="../css/style-narrow.css" rel="stylesheet" type="text/css">
			<link href="../css/style-narrower.css" rel="stylesheet" type="text/css">
			<link href="../css/style-wide.css" rel="stylesheet" type="text/css">
			<title>Administrador</title>
	</head>

<body>
<?php
session_start(); 

 if(isset($_SESSION['idSessao']))
 {
	$idUsuario= $_SESSION['idSessao'];
	$login=$_SESSION['login'];
 }
 else
 {
	header("location:../logado/destroy.php"); 
 }
			
  ?>
	<header id="header">
	<h1 id="logo">
    	<a href="admIndex.php">
        	<img src="../imagens/Logo/logo petprotectpng.png" width="230" style="margin-bottom:60%" height="60"  alt=""/></a>
    </h1>
     <div id="bemvindos">
              
                     <a id="tLogin" href="?m=c">Cadastro Adm</a>
                     <a id="tLogin" href="?m=a">Usuarios</a>
                     <a href="../logado/destroy.php">Sair</a>
    </div>
</header>
<div id="menubarra">
<?php
						require_once('crudAdmin/listaAdmin.php');
		   	 ?>
</div>
<div id="total" style="margin-left:230px">
	<div id="conteudo" style="background:#CDB681">
    	<div id="tela2">
        <?php
			    	if(!isset($_GET['m']))
						require_once('crudUsuario/listarTodosUsuarios.php');
					else
					{
						switch($_REQUEST['m'])
						{
							case 'a':
							require_once('crudUsuario/listarTodosUsuarios.php');
							break;				
						
						
							case 'b':
							require_once('crudAdmin/listaAdmin.php');
							break;	
							
							case 'c':
							require_once('crudAdmin/cadastrarAdmForm.html');
							break;
								
							case 'd':
							require_once('crudUsuario/AlteraUsuarioForm.php');
							break;
							
							case 'e':
							require_once('crudAdmin/AlteraAdmForm.php');
							break;
							
									
					}
					}
		   	 ?>
        	
        </div>
    </div>
</div>


</body>
</html>