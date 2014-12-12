<?php class admClass
{
	var $resultado;
	
	public function mostrar()
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "SELECT * FROM admin";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
		
		public function mostrarUm($nome_login)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "SELECT * FROM admin where loginAdmin='$nome_login'";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
		
		public function getConsulta()
		{
			return $this->resultado;
		}
		
		public function insere($login,$senha)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "INSERT INTO admin (loginAdmin,senhaAdmin) values('$login','$senha')";
			$this->resultado=mysql_query($sql, $Oconn->getconn());
		}
		
		public function deleta($codigo)
		{
			$Oconn=new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "Delete from admin where idAdm = '$codigo';";
			$this->resultado = mysql_query($sql, $Oconn->getconn());
		}
		
		public function pesquisaAdm($codigo)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "SELECT * FROM admin where idAdm=$codigo";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
		
		public function AlteraAdm($idAdm,$loginAdmin,$senhaAdmin)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "update admin set loginAdmin='$loginAdmin', senhaAdmin='$senhaAdmin'where idAdm=$idAdm";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
} ?>