<!doctype html>
<html>
<!--sessão-->
 <?php 
session_start(); 

 if(isset($_SESSION['idSessao']))
 {
	$idUsuario= $_SESSION['idSessao'];
	$login=$_SESSION['login'];
 }
 else
 {
	header("location:destroy.php"); 
 }
			
  ?>
<!--Importação css--> 
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
<title>PetProtect-<?php print(" $login");?></title>

</head>

<body>
<header style="" id="header">
	<h1 id="logo"><a href="principal.php"><img src="../imagens/Logo/logo petprotectpng.png" width="230" style="margin-bottom:60%" height="60"  alt=""/></a></h1>
     
   		 <div id="bemvindos">
                	<?php
						echo('Seja bem vindo '. $_SESSION['login']);
					?>
                 	 <a href="destroy.php">Sair</a>
         </div>
</header>
  <!--corpo-->
  
 <div id="total">
	<div  style="background:#8FBC8F" id="logado">
			<a style="color:#FF6" id="tLogin" href="?m=a">Cadastrar Pet</a>
            <a style="color:#FF6" id="tLogin" href="?m=b&Cod=<?php echo base64_encode($idUsuario)?>">Alterar Conta</a>
            <a style="color:#FF6" id="tLogin" href="crudUsuario/DeletaUsuarioAction.php?Cod=<?php echo base64_encode($idUsuario)?>">Excluir Conta</a>
       </div>
       
 	<div id="conteudo">
     
      <div id="tela2">
    		   <?php
			    	if(!isset($_GET['m']))
						require_once('ListarPets.php');
					else
					{
						switch($_REQUEST['m'])
						{
							case 'a':
							require_once('cadastroPetForm.php');
							break;	
							
							case 'b':
							require_once("crudUsuario/AlteraUsuarioForm.php");
							break;		
							
							case 'c':
							require_once("AlterarPetForm.php");
							break;		
							
							case 'd':
							require_once("agenda/agendaIndex.php");
							break;	
							
							case 'e':
							require_once("agenda/AgendarForm.php");
							break;
							
							case 'f':
							require_once("agenda/agendaAction.php");
							break;
							
							case 'g':
							require_once("agenda/LimparAgendaAction.php");
							break;
						}
		   			}
		   	 ?>
        </div>
        
		</div>
    </div>
    		
		<!-- Footer cabeçalho, icones -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<li><a href="https://twitter.com/patibborges" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/patricia.borges.da.silveira" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://plus.google.com/u/0/103511079511792297930" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; 2014</li><li>PatiBBorges</a></li>
					</ul>
			
			</footer>
   
</body>
</html>
