<div style="margin-left:30px">
<h3 id="lista">usuarios</h3>
<?php include_once '..//CLS/UserClass.php'; 
	  include_once '..//CLS/ConexaoClass.php';
	  
			$User= new UserClass();
			$User-> mostrarTodos();
		?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<center>
        <table CELLPADDING=8>
        <tr>
					<td id="lista"><b>Código</b></td>
					<td id="lista"><b>Nome</b></td>
					<td id="lista"><b>Telefone</b></td>
					<td id="lista"><b>Email</b></td>
					<td></td>
                    <td></td>
                    
				</tr>
				
		
			<?php
				while($Linha = mysql_fetch_array($User-> getConsulta()))
				{
			?>
				<tr>
					<td><?php echo $Linha['idUsuario'];?></td>
					<td><?php echo $Linha['LoginUsuario'];?></td>
					<td><?php echo $Linha['telefone'];?></td>
					<td><?php echo $Linha['email'];?></td>
					<td><a id="lista" href="crudUsuario/DeletaUsuarioAction.php?Cod=<?php echo base64_encode($Linha['idUsuario']);?>">Excluir</a></td><br>
					<!--<td><a href="crudUsuario/AlteraUsuarioForm.php?Cod=<?php echo base64_encode($Linha['idUsuario']);?>">Alterar</a></td>-->
                    <td><a  id="lista" href="?m=d&Cod=<?php echo base64_encode($Linha['idUsuario']);?>">Alterar</a></td>
				</tr>
				
				<?php
				}
				?>		
		</table>
</center></div>