<?php class Agendaclass
{
	var $resultado;
	
	public function mostrar($idPets)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "SELECT * FROM agenda where idPet= $idPets";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
		
		public function getConsulta()
		{
			return $this->resultado;
		}
		
		public function insere($idPet,$horaEntrada,$horaSaida,$status)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "INSERT INTO agenda (idPet,horaEntrada,horaSaida,status) 									  		  		
			values('$idPet','$horaEntrada','$horaSaida','$status')";
			$this->resultado=mysql_query($sql, $Oconn->getconn());
		}
		
	    public function pesquisaAgenda($codigo)
		{
			$Oconn = new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "SELECT * FROM agenda where idPet=$codigo";
			$this-> resultado=mysql_query($sql, $Oconn -> getconn());
		}
		
		
		public function deleta($codigo)
		{
			$Oconn=new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "Delete from agenda where idAgenda = '$codigo';";
			$this->resultado = mysql_query($sql, $Oconn->getconn());
		}
		
		public function deletapet($codigo)
		{
			$Oconn=new ConexaoClass();
			$Oconn-> abrir_conexao();
			$sql = "Delete from agenda where idpet = '$codigo';";
			$this->resultado = mysql_query($sql, $Oconn->getconn());
		}
} ?>