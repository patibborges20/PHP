<?php include_once '../CLS/petClass.php'; 
	  include_once '../CLS/ConexaoClass.php';
	    
		$idUsuario= $_SESSION['idSessao'];	
		$pet= new petClass();
		$pet-> mostrar($idUsuario);
?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<link href="../css/Stilo.css" rel="stylesheet" type="text/css">

<div id="geral">
	<div id="quadrado" style="width:200px; margin-left:80px">	
  	<center>
		<table>
			<?php
				while($Linha = mysql_fetch_array($pet-> getConsulta()))
				{
				
			?>
				<tr style="background:#900">
        	        <td rowspan="6">
					
		   				<a href="?m=d&Cod=<?php echo base64_encode($Linha['idPet'])?>"> 
               		 		<img style="alignment-baseline:middle" src="../imagens/fotoPets/<?php echo $Linha['idPet']?>.jpg" height="150px"> </a>
		   					<?php
		   						echo '<br><br>';
							?>
                   </td>
                </tr>
                <tr>
					<td  style="color:#F00; font-weight:bold; padding-left:50px;"colspan="2"><?php echo $Linha['NomePet'];?></td>
                </tr>
                <tr>
                	<td style="font-weight:bold; padding-left:50px;" width="10px">Porte </td>
					<td style="font-weight:bold; padding-left:50px;"><?php echo $Linha['portePet'];?></td>
                </tr>
                <tr>
                	<td style="font-weight:bold; padding-left:50px;">Coleira</td>
					<td style="font-weight:bold; padding-left:50px;"><?php echo $Linha['IdColeira'];?></td>
                 </tr>
                 <tr>
					<td style="font-weight:bold; padding-left:50px;" colspan="2"><?php echo $Linha['tipodepet'];?></td>
                 </tr>
                 <tr>
					<td style="padding-left:50px;"><a href="DeletaPetAction.php?Cod=<?php echo base64_encode($Linha['idPet']);?>">Excluir</a></td><br>
					<td style="padding-left:50px;"><a href="?m=c&Cod=<?php echo base64_encode($Linha['idPet']);?>">Alterar</a></td>
				</tr>
				
				<?php
				}
				?>
				
				
		</table>
</center>
</div>
