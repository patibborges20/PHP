<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
			<title>Patibborges</title>
		<link rel="stylesheet" type="text/css" href="../CLS/Stilo.css" />

</head>

<body>
<?php 
include_once '../CLS/petClass.php'; 
	  include_once '../CLS/ConexaoClass.php';
	?>
	<?php
	$pet = new petClass();
	$idpet= base64_decode($_GET["Cod"]);
	$linha = $pet -> pesquisaPet($idpet);
	
	
	if($linha=mysql_fetch_array($pet->getConsulta()))
	{
	?>
    <h1 style="color:#396"> Alterar Cadastro </h1>
	<table>
		<form action="AlterarPetAction.php" method="POST" enctype="multipart/form-data">
			<tr>
				<td><strong>Código:</strong></td>
				<td><input type="text" name="idPet" value="<?php echo $linha['idPet']; ?>" 
                readonly ="readonly"></td><br>
			</tr>
			<tr>
				<td><strong>Nome do Pet:</strong></td>
				<td><input type="text"required title="Informe o nome do seu bichinho de estimação" 
                name="Nome" value="<?php echo $linha['NomePet'];?>" size="40"></td><br>
			</tr>
			<tr>
         
		   	   <td><strong>Porte</strong>:</td>
         	   <td><select name="porte">
                     <?php if($linha['portePet']=='Pequeno')
					 {?>
                      	<option name="Pequeno" selected>Pequeno</option>
				     	<option name="Medio" >Medio</option>
				   	 	<option name="Grande">Grande</option>	
                     <?php }	if($linha['portePet']=='Medio')
					 {?>
                     <option name="Pequeno" >Pequeno</option>
				     	<option name="Medio" selected >Medio</option>
				   	 	<option name="Grande">Grande</option>
                        <?php }	if($linha['portePet']=='Grande')
					 {?>
                     <option name="Pequeno" >Pequeno</option>
				     	<option name="Medio" >Medio</option>
				   	 	<option name="Grande" selected>Grande</option>	
                     <?php } ?>
					 </select>
               </td>
		   </tr>
		   <tr>
				<td><strong>Numero da coleira</strong>:</td>
                <td><input type="text" value="<?php echo $linha['IdColeira'];?>" pattern="[0-9]{5}" required title="Informe o id da coleira adquirida pelo seu Pet" name="idColeira" maxlength="5">
              	</td>
		   </tr>
           <tr >
         	   <td><strong>Foto do Pet:</strong>:</td>
               <td> <input name="foto" type="file" size="40"></td> 
    	   </tr>
		   <tr>
		       <td><strong>Animal de estimação</strong>:</td>
               <td><input type="text"  value="<?php echo $linha['tipodepet'];?>" name="tipoPet"placeholder="example: Cat/Dog/Horse..."
                  maxlength="8"> 
               </td>
		  </tr>
           <tr>
       				<td><br></td>
		  </tr>
		  <tr>
			  <td colspan="2"><center><input type="submit" value="Ok"></center></td>
		  </tr>
    </form>
</table>
<?PHP 
}
?>
</body>
</html>