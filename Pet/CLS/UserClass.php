<?php class userclass
{
	var $resultado;
	
	public function mostrar($nome_login)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "SELECT * FROM usuario where LoginUsuario='$nome_login'";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
		
			public function mostrarViaId($codigo)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "SELECT * FROM usuario where idUsuario='$codigo'";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
		
		public function getConsulta()
		{
			return $this->resultado;
		}
		
		public function mostrarTodos()
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "SELECT * FROM usuario";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
		
		public function insere($login,$telefone,$senha,$email)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "INSERT INTO usuario (LoginUsuario,telefone,SenhaUsuario,email) 						
			values('$login','$telefone','$senha','$email')";
			$this->resultado=mysql_query($sql, $Oconn->getconn());
		}
		
		public function deleta($codigo)
		{
			$Oconn=new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "Delete from usuario where idUsuario = '$codigo';";
			$this->resultado = mysql_query($sql, $Oconn->getconn());
		}
		
		public function pesquisaUsuario($codigo)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "SELECT * FROM usuario where idUsuario=$codigo";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
		
		
		public function AlteraUsuario($idUsuario,$LoginUsuario,$telefone,$email,$senhaUsuario)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "update usuario set LoginUsuario='$LoginUsuario', telefone='$telefone', email='$email',senhaUsuario='$senhaUsuario' where idUsuario=$idUsuario";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
		
} ?>