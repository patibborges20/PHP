<?php
session_start();
include '../CLS/ConexaoClass.php';
include '../CLS/petClass.php';

	$pet= new petClass();		
	$idUsuario= $_SESSION['idSessao'];		
	$nomePet=$_POST['nome'];
	$idColeira=$_POST['idColeira'];
	$tipopet=$_POST['tipoPet'];
	$porte=$_POST['porte'];
	$pet->mostrarPet($idColeira);
	
		if($Linha = mysql_fetch_array($pet-> getConsulta()))
		{
			$java = '<script type="text/javascript">
					alert("Coleira já cadastrada");
					window.location.href=("principal.php");
					</script>';
				echo($java);			
		}
		else
		{
			if(!(empty($nome))or!(empty($idColeira)))
			{
		
				$pet-> insere($idUsuario,$nomePet,$porte,$idColeira,$tipopet);
				$pet->mostrarPet($idColeira);
		
				while($Linha = mysql_fetch_array($pet-> getConsulta()))
				{			
					$id_Pet=$Linha['idPet'];	
				}
    
	
			$foto_temp = $_FILES["foto"]["tmp_name"];	//pega o caminho temporário do arquivo
			$foto_name = $_FILES["foto"]["name"];		//pega o nome
			$temp=explode('.', $foto_name);
			$extensao = strtolower(end($temp)); //seleciona a extenção da imagem
			$max_width = 600; //define largura máxima
			$max_height = 600; //define altura máxima

			// Carrega a imagem 
			$img = null;

			//Transforma a imagem em JPG
			if ($extensao == 'jpg' || $extensao == 'jpeg') { 
    			$img = @imagecreatefromjpeg($foto_temp);
			} else 
				if ($extensao == 'png') { 
    				$img = @imagecreatefrompng($foto_temp);
				} else 
					if ($extensao == 'gif') { 
    					$img = @imagecreatefromgif($foto_temp); 
					} else     
						$img = @imagecreatefromjpeg($foto_temp); 

			// Se a imagem foi carregada com sucesso, testa o tamanho da mesma
			if ($img) { 
    		// Pega o tamanho da imagem e calcula proporção de resize 
    		$width  = imagesx($img); 
    		$height = imagesy($img); 
    		$scale  = min($max_width/$width, $max_height/$height); 
			// Se a imagem é maior que o permitido, encolhe ela! 
    		if ($scale < 1) { 
        		$new_width = floor($scale*$width); 
        		$new_height = floor($scale*$height);
        		// Cria uma imagem temporária 
        		$tmp_img = @imagecreatetruecolor($new_width, $new_height);
        		// Copia e resize a imagem velha na nova     
				@imagecopyresampled($tmp_img, $img, 0, 0, 0, 0, 
                         $new_width, $new_height, $width, $height);  
        		@imagedestroy($img); 
        		$img = $tmp_img;            
		}

			//cria imagem no diretório @imagejpeg($img,"diretorio/".$id_noticia) se já tiver com este nome vai substituir
			@imagejpeg($img,"../imagens/fotoPets/".$id_Pet.".jpg"); 
			$java = '<script type="text/javascript">
				window.location.href=("principal.php");
			</script>';
			echo $java;
	
		}}}
	?>