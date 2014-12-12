<?php
include '../CLS/ConexaoClass.php';
include '../CLS/agendaClass.php';
?>
<?php


	$agenda = new agendaClass();
	$idPet=base64_decode($_GET['Cod']);
  	$agenda-> mostrar($idPet);
	
	?>
<link href="../../css/Stilo.css" rel="stylesheet" type="text/css">
<link href="../../css/style-normal.css" rel="stylesheet" type="text/css">

<a id="tLogin" href="?m=e&Cod=<?php echo base64_encode("$idPet")?>">Agendar</a>
    <a  id="tLogin" href="agenda/LimparAgendaAction.php?Cod=<?php echo base64_encode("$idPet")?>">Limpar Agenda</a>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../../css/Stilo.css" rel="stylesheet" type="text/css">
    
    
<div id="geral">
<div id="quadrado" style="width:200px; margin-left:80px">	
  <center>
		<table style="margin-left:100px; color:#063; font-weight:bold;">
        <tr>
        <td style="color:#FC3" id="agenda">Código</td>
					<td style="color:#FC3" id="agenda">Pet</td>
                 	<td style="color:#FC3" id="agenda">Entrada</td>
					<td style="color:#FC3" id="agenda">Saida</td>
                    <td style="color:#FC3" id="agenda">Status</td>
         <tr>
           <td colspan="5"><hr></td>
         </tr>
        </tr>
        
		  <?php
				while($Linha = mysql_fetch_array($agenda-> getConsulta()))
				{
				
			?>
                <tr>
                	<td><?php echo $Linha['idAgenda'];?></td>
					<td><?php echo $Linha['idPet'];?></td>
                 	<td><?php echo $Linha['horaEntrada'];?></td>
					<td ><?php echo $Linha['horaSaida'];?></td>
                    <td ><?php echo $Linha['status'];?></td>
                 </tr>
                
                 <tr>
					<td><a href="agenda/deletaHorarioAction.php?Cod=<?php echo base64_encode($Linha['idAgenda']);?>&CodPet=<?php echo base64_encode($Linha['idPet']);?>">Excluir</a></td><br>
					
				</tr>
				 <tr>
              <td colspan="5"><hr></td>
         </tr>
        </tr>
		  <?php
				}
				?>
					
	</table>
</center>
</div>
