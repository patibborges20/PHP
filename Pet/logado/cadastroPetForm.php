<div id="cadastro" style="margin-left:12%">
<br>
<h1><font color="#009966">PetCadastro</font></h1><br>
	<table>
           <form action="CadastroPetAction.php" method="POST" name="cadastroPet" enctype='multipart/form-data'>
        <tr>
         		<td><strong>Apelido</strong>:</td>
         		<td><input name="nome" required title="Informe o nome do seu bichinho de estimação" type="text" 
                     size="40">
               </td>
       </tr>
       <tr>
         	   <td><strong>Porte</strong>:</td>
         	   <td><select required title="Escolha o porte do seu pet" name="porte">
                   <option><selected></option>
				   <option name="Pequeno">Pequeno</option>
				   <option name="Medio" >Medio</option>
					<option name="Grande">Grande</option>		
					</select>
              </td>
      </tr>
      <tr>
             <td><strong>Numero da coleira</strong>:</td>
              <td><input type="text" required title="Informe o id da coleira adquirida pelo seu Pet" pattern="[0-9]{5}"
                   name="idColeira" maxlength="5">
              </td>
     </tr>
     <tr >
         	 <td><strong>Foto do Pet:</strong>:</td>
             <td> <input required title="Selecione uma imagem do seu bichinho" name="foto" type="file" size="40"></td>
    </tr>
    <tr>
             <td><strong>Animal de estimação</strong>:</td>
             <td><input type="text" name="tipoPet"placeholder="example: Cat/Dog/Horse..."
                  maxlength="8">
             </td>
   </tr>
            <td></td>
            <td><br><input type= "reset" value= "Limpar"><input type="submit" value="Ok"></td>
   </tr>
         		  </form> 
 </table>	
  <a href="principal.php">Voltar</a> 
</div>