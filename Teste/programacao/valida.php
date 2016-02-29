<?
    function Anuncio($imagem, $dir)
  {
		
		// Nome do Arquivo da Imagem
        $foto = $imagem;
        // Nome do Diretorio onde o Arqivo se Encontra


           $newX = 450;
           $newY = 120;


        // Define a Raiz do Diretorio
        $dirpath = getcwd() . "$dir";
        // Imagem Original

        $original = imagecreatefromjpeg($dirpath . $foto);
        //echo "[$dirpath . $foto ]<br>";
        // Pega o Tamanho da Imagem
        $x = imagesx($original);
        $y = imagesy($original);
        // Define a Largura para a Imagem

        // Cria uma Imagem Temporaria com o Novo Tamanho
        $img_temp = imagecreatetruecolor($newX,$newY);
        // Muda o tamanho da Imagem Original de Acordo com a Imagem Temporaria
        imagecopyresized($img_temp, $original, 0, 0, 0, 0, $newX, $newY, $x, $y);
        // Copia a Imagem Original Alterada substituindo a Imagem Original Padrão
        imagejpeg($img_temp,  $dirpath . $foto, 100);

        // Apaga as imagens temporarias
        imagedestroy($img_temp);
        imagedestroy($original);
  }
    function Redimenciona($imagem, $dir)
  {
		
		// Nome do Arquivo da Imagem
        $foto = $imagem;
        // Nome do Diretorio onde o Arqivo se Encontra


           $newX = 150;
           $newY = 150;


        // Define a Raiz do Diretorio
        $dirpath = getcwd() . "$dir";
        // Imagem Original

        $original = imagecreatefromjpeg($dirpath . $foto);
        //echo "[$dirpath . $foto ]<br>";
        // Pega o Tamanho da Imagem
        $x = imagesx($original);
        $y = imagesy($original);
        // Define a Largura para a Imagem

        // Cria uma Imagem Temporaria com o Novo Tamanho
        $img_temp = imagecreatetruecolor($newX,$newY);
        // Muda o tamanho da Imagem Original de Acordo com a Imagem Temporaria
        imagecopyresized($img_temp, $original, 0, 0, 0, 0, $newX, $newY, $x, $y);
        // Copia a Imagem Original Alterada substituindo a Imagem Original Padrão
        imagejpeg($img_temp,  $dirpath . $foto, 100);

        // Apaga as imagens temporarias
        imagedestroy($img_temp);
        imagedestroy($original);
  }

    function Acerta_palavra($valor)
   {
          $valor = strtolower(trim($valor));
          $corrigido = str_replace("á", "a",$valor);
          $corrigido = str_replace("à", "a",$corrigido);
          $corrigido = str_replace("ã", "a",$corrigido);
          $corrigido = str_replace("â", "a",$corrigido);

          $corrigido = str_replace("é", "e",$corrigido);
          $corrigido = str_replace("è", "e",$corrigido);
          $corrigido = str_replace("ê", "e",$corrigido);

          $corrigido = str_replace("í", "i",$corrigido);
          $corrigido = str_replace("ì", "i",$corrigido);
          $corrigido = str_replace("î", "i",$corrigido);

          $corrigido = str_replace("ô", "o",$corrigido);
          $corrigido = str_replace("õ", "o",$corrigido);
          $corrigido = str_replace("ó", "o",$corrigido);
          $corrigido = str_replace("ò", "o",$corrigido);

          $corrigido = str_replace("û", "u",$corrigido);
          $corrigido = str_replace("ù", "u",$corrigido);
          $corrigido = str_replace("ú", "u",$corrigido);

          $corrigido = str_replace("ç", "c",$corrigido);

          $corrigido = str_replace("-", "",$corrigido);
          $corrigido = str_replace("/", "",$corrigido);
          $corrigido = str_replace("|", "",$corrigido);
          $corrigido = str_replace(",", "",$corrigido);
          $corrigido = str_replace(";", "",$corrigido);
          $corrigido = str_replace(":", "",$corrigido);
          $corrigido = str_replace("'", "",$corrigido);
          $corrigido = str_replace('"', "",$corrigido);
       return $corrigido;
  }
?>