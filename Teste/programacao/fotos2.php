<?php
include ("./valida.php");
$larguraMax = 450; 
$alturaMax = 120; 
$tamanhoMax = 1500000;

$erro[] = "<b>Tamanho do arquivo maior que o permitido [".($tamanhoMax/2500)." kb].</b>";
$erro[] = "<b>A Largura da imagem maior que o permitido.</b>";
$erro[] = "<b>A Altura da imagem maior que o permitido.</b>";
$erro[] = "<b>O Arquivo já existe no diretório.</b>";
$erro[] = "<b>Formato do arquivo não permitido ou inválido.</b>";


if(isset($_FILES["logo"]))
{

    foreach (@$_FILES["logo"]["name"] as $key => $name)
   {
       $arquivo = $_FILES["logo"];
       $dimensoes = @getimagesize($arquivo["tmp_name"][$key]);
	   $nomefoto = @strtolower($_FILES["logo"]["name"][$key]);

        #Verificando se a imagem foi enviada
	    if($arquivo["name"][$key] != "")
		{
		    # Retirando espacos no nome do arquivo
			$espacos = explode(" ",$nomefoto);
			if(count($espacos) > 1)
			{
				$nomefoto = strtolower(@ereg_replace(' ', '_', $nomefoto));
			} 
			
			# Se o Tamanho do arquivo é permitido
			if($arquivo["size"][$key] > $tamanhoMax)
			{
				# Adiciona o erro no array erros[]
				$erros[] = "$erro[0]";
			}
			# Se a Largura do arquivo é permitida
			
			# Verifica se o arquivo ja existe no diretorio
			if(file_exists("foto/$nomefoto"))
			{
				$erros[] = "$erro[3]";
			} 
			
			# O array erros nao tiver nenhum indice o upload é permitido/realizado
			if(!isset($erros))
			{
				$nomefoto = Acerta_palavra($nomefoto);
				$imagem_dir = "./foto/".$nomefoto;
				move_uploaded_file($_FILES["logo"]["tmp_name"][$key], $imagem_dir);
				$sucesso[] = "<b>upload com sucesso.</b>";

				if(($dimensoes[0] > $larguraMax) || ($dimensoes[1] > $alturaMax))
				{
						Anuncio($nomefoto , "\\foto\\");
				}
			}

		}
	} //fecha o foreach

	# Verifica se existem erros  no array

}
?>