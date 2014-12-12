<?php
include '../CLS/ConexaoClass.php';
include '../CLS/petClass.php';
include '../CLS/agendaClass.php'
?>
<?php
	$pet = new petClass();
	$agenda = new agendaClass();
	$codigo=base64_decode($_GET['Cod']);
	unlink('../imagens/fotoPets/'.$codigo.'.jpg');
	$agenda->deletapet($codigo);
  	$pet-> deleta($codigo);
	
	
		$java = '<script type="text/javascript">
				window.location.href=("principal.php");
	</script>';
	echo $java;
?>

	