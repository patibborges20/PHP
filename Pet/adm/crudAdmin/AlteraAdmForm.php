	<?php 
	  include_once '../CLS/admClass.php'; 
	  include_once '../CLS/ConexaoClass.php';
	?>
	<?php
	$adm = new admClass();
	$idAdm= base64_decode($_GET["Cod"]);
	$linha = $adm -> pesquisaAdm($idAdm);
	
	if($linha=mysql_fetch_array($adm->getConsulta()))
	{
	?>
    
    
    <h2><font color="#009966">Alterar Dados </font></h2> <br>
	<center>
		<table style="margin-left:10%">
         		<form action="crudAdmin/AlteraAdmAction.php" method="POST" enctype='multipart/form-data'
                 OnSubmit="return TestaCadastro()">
         	<tr>
         		<td width="21%">Id ADM:</td>
         		<td width="79%"><input name="idAdm"  value="<?php echo $linha['idAdm']; ?>" required  
                type="text" readonly ><br></td>
           </tr>
           <tr>
         		<td width="21%">Usuario:</td>
         		<td width="79%"><input name="loginAdmin"  value="<?php echo $linha['loginAdmin']; ?>" required title="Informe o nome da conta" 
                type="text" ><br></td>
           </tr>
         <tr>
         		<td>Senha:</td>
         		<td><input min="6" type="password" id="senha"  value="<?php echo $linha['senhaAdmin']; ?>" required title="Informe sua senha" 
                name="senhaAdmin" maxlength="8"><br></td>
         </tr>
         <tr>
         	   <td>Confirme a senha:</td>
         	   <td><input type="password" value="<?php echo $linha['senhaAdmin']; ?>" required title="Informe sua senha novamente" 
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

            