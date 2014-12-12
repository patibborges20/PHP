<?php include_once '..//CLS/admClass.php'; 
	  include_once '..//CLS/ConexaoClass.php';
	     
			$idAdm= $_SESSION['idSessao'];
		
			$adm= new admClass();
			$adm-> mostrar();
			
				while($Linha = mysql_fetch_array($adm-> getConsulta()))
				{
					if($Linha['idAdm']==$idAdm)
					{
			?>
            <table>
				<tr>
					<td colspan="2" style="color:#FC0"><center><h1><?php echo ("Olá ".$Linha['loginAdmin']." !")?></h1></center></td> <br>	
				</tr>
				<tr>
				<?php
				}}
				?>		
        <td><a id="tLogin" href="crudAdmin/DeletaAdmAction.php?Cod=<?php echo base64_encode($idAdm);?>">Excluir</a><br></td>
					<td><a id="tLogin" href="admIndex.php?m=e&Cod=<?php echo base64_encode($idAdm);?>">Alterar</a></td>
                    
                </tr>
               </table><br><br>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<center>
         <h5 style="color:#999">Outros Administradores</h5>
		<table CELLPADDING=8>
			<?php
			$adm= new admClass();
			$adm-> mostrar();
				while($Linha = mysql_fetch_array($adm-> getConsulta()))
				{
					if($Linha['idAdm']!=$idAdm)
					{
			?>
				<tr>
					<td style="color:#CF6"><?php echo $Linha['idAdm'];?></td>
					<td style="color:#FF6"><?php echo $Linha['loginAdmin'];?></td> <br>
				
				</tr>
				
				<?php
				}}
				?>		
		</table>
</center>