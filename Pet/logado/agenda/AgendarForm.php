<div id="cadastro" style="margin-left:12%">
<br>
<?php 
$idPet=base64_decode($_GET['Cod']);
?>
<h1><font color="#FF0000">Permissão</font></h1><br>
	<table>
           <form action='agenda/agendaAction.php' method="POST" enctype='multipart/form-data' 
            OnSubmit="return TestaCadastroPet()">
              <tr>
         		<td><strong>idPet</strong>:</td>
         		<td><input name="idPet" type="text" value="<?php echo $idPet ?>"
                     size="40" readonly>
               </td>
       </tr>
        <tr>
         		<td><strong>Hora Entrada</strong>:</td>
         		<td><input name="HEntrada" required title="verificar se condiz com os horarios" type="time" 
                     size="40">
               </td>
       </tr>
        <tr>
         		<td><strong>Hora Saida</strong>:</td>
         		<td><input name="HSaida" required title="verificar se condiz com os outros horarios" type="time" 
                     size="40">
               </td>
       </tr>
       <tr>
         	   <td><strong>Acesso</strong>:</td>
         	   <td><select name="status">
                   <option value="" selected></option>
				   <option name="só entrar">So Entrar</option>
				   <option name="só sair" >Só sair</option>
					<option name="Aberto">Aberto</option>
                    <option name="Fechado">Fechado</option>		
					</select>
              </td>
      </tr>
            <td></td>
            <td><br><input type= "reset" value= "Limpar"><input type="submit" value="Ok"></td>
   </tr>
         		  </form> 
 </table>	
  <a href="principal.php">Voltar</a> 
</div>