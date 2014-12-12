<?php
include '../../CLS/ConexaoClass.php';
include '../../CLS/admClass.php';
?>
<?php
	$adm = new admClass();
	$codigo=base64_decode($_GET['Cod']);
  	$adm-> deleta($codigo);
	session_start();
	@session_destroy();
	unset ($_SESSION['idSessao']);
	$java = '<script type="text/javascript">
				alert("Sua conta esta sendo desativada!");
				window.location.href=("../../index.html");
	</script>';
	echo $java;
?>