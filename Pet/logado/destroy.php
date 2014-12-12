<?php
	session_start();
	@session_destroy();
	unset ($_SESSION['idSessao']);
	echo "<script language='javascript'> window.close(); </script>";
	header("location:../index.html");
?>