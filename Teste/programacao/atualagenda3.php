<?PHP
include("./conexao.php");
include("./util.php");
$Nome = $_COOKIE['Nome'];
$Login = $_COOKIE['Login'];
$Senha = $_COOKIE['Senha'];
if(Logado($Login, $Senha) == "1")
{
include "sql.php";

if(isset($_POST['done'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $local = $_POST['local']; 

     include("./fotos2.php");

	if(!empty($nomefoto))
	{
	     
       $sql = mysql_query("UPDATE anuncio SET  logo='$nomefoto', nome='$nome', local='$local' WHERE id='$id'")or die(mysql_error());

            if($sql){

                $erro = "Dados alterados com sucesso!";
  
              } else{

                  $erro = "N�o foi possivel alterar os dados";

              }
    }
	else
	{

	       $sql = mysql_query("UPDATE anuncio SET nome='$nome', local='$local' WHERE id='$id'")or die(mysql_error());

            if($sql){

                $erro = "Dados alterados com sucesso!";
  
              } else{

                  $erro = "N�o foi possivel alterar os dados";

              }
	}
}

$id = $_GET['id'];

$sql = mysql_query("SELECT * FROM anuncio WHERE id = '$id'");

$nome = @mysql_result($sql, 0, "nome");

$local = @mysql_result($sql, 0, "local");

$id = @mysql_result($sql, 0, "id");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Dicas</title>

<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
	background-image: url(images/fundo.jpg);
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
</style>

</head>

<body>

<form name="form1" action="atualagenda3.php" method="POST" style="padding-top:40px;" enctype="multipart/form-data">
<font color="#fffff">
<?php

if(isset($erro)){
    print '<div style="width:91%; background:#ff6600; color:#fff; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';
}

?>


<table width="900" border="0" bordercolor="#FFFFFF" align="center" bgcolor="#000000"> 
  <tr> 
    <td height="200" colspan="2" valign="middle"><img src="images/LOGO.png" /></td> 

  </tr>

<tr>

<td colspan="4"><div align="center"><b>.:: INSERIR EVENTO NO SISTEMA ::.</b></td>

</tr>

<tbody>
<tr><td width="20%"><div align="right">Id:</div></td>
<td><div align="left"><input type="text" name="id" value="<?PHP echo $id; ?>" readonly></div></td>
</tr>
<tr> 
<td width="20%"><div align="right">Servi�o:</div></td>
<td width="auto"colspan="3"><div align="left">
<?PHP
 if($local=="topo1")
 {
   print'
<input type="radio" name="local" value="topo1" checked/> Anuncio Topo 1 ';
 }
 else
  {
   print'
<input type="radio" name="local" value="topo1" > Anuncio Topo 1 ';
 }
 if($local=="topo2")
 {
   print'
<input type="radio" name="local" value="topo2" checked/> Anuncio Topo 2 <br />';
 }
  else
  {
   print'
<input type="radio" name="local" value="topo2" > Anuncio Topo 2 <br />';
 }
  if($local=="anuncio1")
 {
   print'
<input type="radio" name="local" value="anuncio1" checked/> Anuncio 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
 }
  else
  {
   print'
<input type="radio" name="local" value="anuncio1" > Anuncio 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
 }
  if($local=="anuncio2")
 {
   print'
<input type="radio" name="local" value="anuncio2" checked/> Anuncio 2 <br />';
 }
  else
  {
   print'
<input type="radio" name="local" value="anuncio2" > Anuncio 2 <br />';
 }
   if($local=="anuncio3")
 {
   print'
<input type="radio" name="local" value="anuncio3" checked/> Anuncio 3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
 }
  else
  {
   print'
<input type="radio" name="local" value="anuncio3" > Anuncio 3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
 }
   if($local=="anuncio4")
 {
   print'
<input type="radio" name="local" value="anuncio4" checked/> Anuncio 4 <br />';
 }
  else
  {
   print'
<input type="radio" name="local" value="anuncio4" > Anuncio 4 <br />';
 }
   if($local=="anuncio5")
 {
   print'
<input type="radio" name="local" value="anuncio5" checked/> Anuncio 5 ';
 }
  else
  {
   print'
<input type="radio" name="local" value="anuncio5" > Anuncio 5 ';
 }
 ?>

</td>
</tr>
<tr>
<td width="20%"><div align="right">Logo:</div></td>
<td width="auto"colspan="3"><div align="left"><input type="file"  name="logo[]"  /></div></td>
</tr>
<tr>

<td width="20%"><div align="right">Nome:</div></td>

<td width="auto" colspan="3"><div align="left"><input type="text" name="nome" value="<?PHP echo $nome;?>" class="campo" id="nome" size="55"/></div></td>
</tr>
<tr>

<td></td>

<td><input type="submit" value="Cadastrar Evento" /><input type="hidden" name="done" value="" /></td>

</tr>

</tbody>
  <tr height=220><td>
  		<td>
		  <a href="painelcontrole.php"><div align="center"><img src="voltar.jpg"><br />voltar</div></a>
		</td> 
  </td></tr>
</table>
</font>
</form>

</body>

</html>
<?PHP
}
else
{
Mensagem_Erro();
}
?>
