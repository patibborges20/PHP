	<?php 
	  include_once '../CLS/UserClass.php'; 
	  include_once '../CLS/ConexaoClass.php';
	?>
	<?php
	$User = new UserClass();
	$idUsuario= base64_decode($_GET["Cod"]);
	$linha = $User -> pesquisaUsuario($idUsuario);
	
	if($linha=mysql_fetch_array($User->getConsulta()))
	{
	?>    
    
    <h2><font color="#009966">Alterar Dados </font></h2> <br>
	<center>
		<table style="margin-left:10%">
         		<form action="crudUsuario/AlteraUsuarioAction.php" method="POST" enctype='multipart/form-data'
                 OnSubmit="return TestaCadastro()">
                 
                 <tr>
         		<td width="21%">Código:</td>
         		<td width="79%"><input name="idUsuario"  value="<?php echo $linha['idUsuario']; ?>" required title="Informe o nome da conta" 
                type="text" readonly><br></td>
           </tr>
         	<tr>
         		<td width="21%">Usuario:</td>
         		<td width="79%"><input name="LoginUsuario"  value="<?php echo $linha['LoginUsuario']; ?>" required title="Informe o nome da conta" 
                type="text"><br></td>
           </tr>
           <tr>
         		<td>telefone:</td>
         		<td><input type="tel" required title="Informe seu telefone //b formato XX-XXXXXXXX" value="<?php echo $linha['telefone']; ?>"  pattern="^\d{2}-\d{8}$"
                name="telefone" placeholder="xx-xxxxxxxx" maxlength="11"><br></td>
          </tr>
          <tr>
         		<td>Email:</td>
         		<td><input type="email" required title="Informe seu email" value="<?php echo $linha['email']; ?>"
                 name="email" placeholder="example@example.com" maxlength="30"><br></td>
         </tr>
            <tr>
         		<td>Senha:</td>
         		<td><input min="6" type="password" name="senhaAntiga"  required title="Informe sua senha" 
                name="senhaUsuario" maxlength="8"><br></td>
         </tr>
         <tr>
         		<td>Nova Senha:</td>
         		<td><input min="6" type="password" id="senha"  required title="Informe sua senha" 
                name="senhaUsuario" maxlength="8"><br></td>
         </tr>
         <tr>
         	   <td>Confirme a senha:</td>
         	   <td><input type="password" required title="Informe sua senha novamente" 
                 maxlength="8" oninput="ValidaSenha(this)"><br></td>
         </tr>
         <tr>
         		<td></td>
         		<td><br><input type= "reset" value= "Limpar">
                <input type="submit"  class="testar" value="Ok"></td>
         </tr>
         		 </form>
                 
      </table>	</center>
      
      <?PHP 
		}
		?>
     
      
     <!--Script validar senha repetida- n funciona-->

        <script>
			function ValidaSenha(input) {
  				if (input.value != document.getElementById('senha').value) {
    				input.setCustomValidity('Redigite sua senha corretamente.');
  				} else {
    				input.setCustomValidity('');
  				}
				}
		</script>

            