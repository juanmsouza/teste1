<?php
include("./conexao.php");
include("./util.php");
$Nome = $_COOKIE['Nome'];
$Login = $_COOKIE['Login'];
$Senha = $_COOKIE['Senha'];
if(Logado($Login, $Senha) == "1")
{

include "sql.php";
$logo = @mysql_result($sqln, $i, "logo");
$x= opendir("foto");
$z = readdir($x);
$row_galeria = $x;
$totalRows_galeria = $z;
$dir = "foto";
$exts = array('jpg','png','jpeg','gif','bmp');
if (is_dir($dir)) {
if ($d = opendir($dir))
{
while (($file = readdir($d)) !== false) 
{
if (filetype($dir.'/'.$nomefoto) == 'file')
{
# Recupera a extensao do arquivo 
$extensao = explode('.', $file);
for($i=0; $i<=count($exts)-1; $i++)
{

 

         echo "<a href=\"$dir/{$file}\" rel=\"lightbox[roadtrip]\">";
		echo "<img src=$dir/{$file}\" class=\"thumbs\"></a>";
          while ($z != true); 
		  }
} # end for
} # filetype
} # while
} # end opendir
}

?>