<?php
if(isset($_POST['done'])){
$larguraMax = 800; 
$alturaMax = 600; 
$tamanhoMax = 1500000;
$formatos = "pjpeg|jpeg|png|gif|x-png|jpg";


$erro[] = "<b>Tamanho do arquivo maior que o permitido [".($tamanhoMax/2500)." kb].</b>";
$erro[] = "<b>A Largura da imagem maior que o permitido.</b>";
$erro[] = "<b>A Altura da imagem maior que o permitido.</b>";
$erro[] = "<b>O Arquivo já existe no diretório.</b>";
$erro[] = "<b>Formato do arquivo não permitido ou inválido.</b>";


if(isset($_FILES["fotos"]))
{

foreach ($_FILES["fotos"]["name"] as $key => $name)
{
$arquivo = $_FILES["fotos"];
$dimensoes = getimagesize($arquivo["tmp_name"][$key]);
$nomefoto = strtolower($_FILES["fotos"]["name"][$key]);

#Verificando se a imagem foi enviada
if($arquivo["name"][$key] != "")
{
# Retirando espacos no nome do arquivo
$espacos = explode(" ",$nomefoto);
if(count($espacos) > 1)
{
$nomefoto = strtolower(ereg_replace(' ', '_', $nomefoto));
} 
# Se o Tamanho do arquivo é permitido
if($arquivo["size"][$key] > $tamanhoMax)
{
# Adiciona o erro no array erros[]
$erros[] = "$erro[0]";
}
# Se a Largura do arquivo é permitida
if($dimensoes[0] > $larguraMax)
{
$erros[] = "$erro[1]";
}
# Se a Altura do arquivo é permitida
if($dimensoes[1] > $alturaMax)
{
$erros[] = "$erro[2]";
}
# Verifica se o arquivo ja existe no diretorio
if(file_exists("fotos/$nomefoto"))
{
$erros[] = "$erro[3]";
} 
# Verifica se extensao é pertida
if(!eregi("^image\/($formatos)$", $arquivo["type"][$key]))
{
$erros[] = "$erro[4]".$arquivo["type"][$key];
}
# O array erros nao tiver nenhum indice o upload é permitido/realizado
if(!isset($erros))
{
$imagem_dir = "fotos/".$nomefoto;
move_uploaded_file($_FILES["fotos"]["tmp_name"][$key], $imagem_dir);
$sucesso[] = "<b>upload com sucesso.</b>";

}
}
}
# Verifica se existem erros  no array
if(isset($erros))
{
echo "<ul class='erro'>";
foreach($erros as $erro)
{
echo "<p><span>$erro</span></p>";
}
echo "</ul>";
}
# Verifica quais imagens tiveram sucesso no upload
if(isset($sucesso))
{
echo "<ul class='sucesso'>";
foreach($sucesso as $up)
{
echo "<p><span>$up</span></p>";
}
echo "</ul>";
}
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1"> 
<title>Star Divulgações</title>
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
  <tr>
  <td><div align="center">
  <form action="enviar.php"  method="post"  enctype="multipart/form-data">
<table border="2" bordercolor="#fff" bgcolor="#999999" align="center">
<tr>

<td><br><input type="file"  name="fotos[]" /><br /></td>
</tr>
<tr>
<td><div align="center"><input type="submit"  value="  enviar  " /><input type="hidden" name="done" value="" /></div></td>

</tr></div>
</td></tr>

</table>
</form>
  <tr height=220><td>
  	
		  <a href="../painelcontrole.php"><div align="center"><img src="../voltar.jpg"><br />voltar</div></a>
		
  </td></tr>
</table>
</body>
</html>