<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1"> 
<title>Star Divulgações</title>
	<link rel="stylesheet" type="text/css" 

href="../style-projects-jquery.css" />    
    
    <!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" 

src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" 

href="css/jquery.lightbox-0.5.css" media="screen" />
    <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>
<style type="text/css">
<!--

body {
	background-color: #CCCCCC;
	background-image: url(../images/fundo.jpg);
	margin-top: 0px;
	margin-bottom: 0px;
}
.style2 {
	color: #666666;
	font-weight: bold;
	font-size: 24px;
}
a:link {
	color: #0ed30e;
	text-decoration: none;
}
a:visited {
	color: #0ed30e;
	text-decoration: none;
}
a:hover {
	color: #b60088;
	text-decoration: underline;
}
a:active {
	color: #0ed30e;
	text-decoration: none;
}
.style9 {
	color: #666666;
	font-size: 16px;
}
.style14 {color: #FFFFFF; font-weight: bold; font-style: italic; }
.style16 {
	font-family: "Segoe Script";
	font-size: 14px;
}
.style19 {
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
}
.style27 {color: #F5F5F5}
.style28 {
	font-family: "Segoe Script";
	font-size: 14px;
	color: #445566;
}
.style29 {color: #999999}
.style32 {color: #00CCFF}
.style34 {color: #66FF00}
.style35 {font-size: 14px}
.style36 {color: #FF00FF}
.style37 {color: #000000}
.style42 {
	color: #F5F5F5;
	font-size: 16px;
}
.style44 {color: #666666}
.style45 {font-size: 16px}
.style46 {color: #CBCBCB}
.style48 {
	color: #CCCCCC;
	font-weight: bold;
	font-size: 36px;
}
-->
</style></head>

<body>
<table width="100" height="550" border="0" align="center" bgcolor="#000000">
 
  <tr>
    <td height="260"><table width="950" border="0" align="center">
        <tr>
          <td width="387" rowspan="3"><img src="../images/LOGO.png" width="350" height="180" /></td>
                  </tr>
            </table>   
			</td>
  </tr>
  <tr>  <td><div align="center">
<table width="779" border="1">
  <tr>
    <td><div align="center" id="gallery">
<?php
$x= opendir("fotos");
$z = readdir($x);
$row_galeria = $x;
$totalRows_galeria = $z;
$dir = "fotos";
$exts = array('jpg','png','jpeg','gif','bmp');
if (is_dir($dir)) {
if ($d = opendir($dir))
{
while (($file = readdir($d)) !== false) 
{
if (filetype($dir.'/'.$file) == 'file')
{
# Recupera a extensao do arquivo 
$extensao = explode('.', $file);
for($i=0; $i<=count($exts)-1; $i++)
{
# Verifica se a extensa é permita (esta no array exts)
if($extensao[1] == $exts[$i]) 
{
 
?>

      	  <?php  
         echo "<a href=\"$dir/{$file}\" rel=\"lightbox[roadtrip]\">";
		echo "<img src=\"thumbs.php?img=$dir/{$file}\" class=\"thumbs\"></a>&nbsp;";
          while ($z != true); ?>
		  <?PHP
		  }
} # end for
} # filetype
} # while
} # end opendir
}
		  ?>
		  </div></td>
  </tr>
</table>
  <tr height=220><td>
  	
		  <a href="../painelcontrole.php"><div align="center"><img src="../voltar.jpg"><br />voltar</div></a>
		
  </td></tr>
</table>
</body>
</html>

