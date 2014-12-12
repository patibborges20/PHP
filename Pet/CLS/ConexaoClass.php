<?php
	class ConexaoClass
	{
		var $conn;
		
		 function abrir_conexao()
		{
			$server="localhost";
			$usuario="root";
			$senha="";
			$banco="petprotect";
			
			$this -> conn = mysql_connect ($server,$usuario,$senha);
			mysql_select_db($banco, $this->conn);
		}
		
		 function getconn()
		{
			return $this ->conn;
		}
		
		
	}
	
	?>