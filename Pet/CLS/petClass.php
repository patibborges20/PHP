<?php class petclass
{
	var $resultado;
	
	public function mostrar($idUsuario)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "SELECT * FROM pets where idUsuario= $idUsuario";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
			
		public function mostrarPet($idColeira)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "SELECT * FROM pets where IdColeira= $idColeira";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
			
		public function getConsulta()
		{
			return $this->resultado;
		}
		
		public function insere($idUsuario,$nomePet,$portePet,$idColeira, $tipodepet)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "INSERT INTO pets (idUsuario,NomePet,portePet,IdColeira,tipodePet) 									  		 values('$idUsuario','$nomePet','$portePet','$idColeira','$tipodepet')";
			$this->resultado=mysql_query($sql, $Oconn->getconn());
		}
		
	    public function pesquisaPet($codigo)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "SELECT * FROM pets where idPet=$codigo";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
		
		
		public function AlteraPet($idPet,$NomePet,$portePet,$tipodepet,$idColeira)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "update pets set NomePet='$NomePet', portePet='$portePet', tipodepet='$tipodepet',idColeira='$idColeira' where idPet=$idPet";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
		
		public function deleta($codigo)
		{
			$Oconn=new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "Delete from pets where idPet = '$codigo';";
			$this->resultado = mysql_query($sql, $Oconn->getconn());
		}
		
		public function deletaUsuario($codigo)
		{
			$Oconn=new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "Delete from pets where idUsuario = '$codigo';";
			$this->resultado = mysql_query($sql, $Oconn->getconn());
		}
} ?>