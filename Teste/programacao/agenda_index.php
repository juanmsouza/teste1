<?php

include "sql.php";
include "util.php";
$Nome = $_COOKIE['Nome'];
$Login = $_COOKIE['Login'];
$Senha = $_COOKIE['Senha'];
if(Logado($Login, $Senha) == "1")
{

if(isset($_POST['done'])){

    $evento = $_POST['evento'];
    $devento = $_POST['dia'];
    $mevento = $_POST['mes'];
    $aevento = $_POST['ano'];	
	$hora = $_POST['hora'];
	$minuto= $_POST['minuto'];
	$local = $_POST['local'];
    $conteudo = $_POST['conteudo'];
$dia=date("d");
$mes=date("m");
$ano=date("Y");
$situacao='A';
	

   $sql = mysql_query("INSERT INTO `agenda`(`evento`, `devento`,`mevento`,`aevento`,`hora`,`minuto`, `local`, `conteudo`, `situacao` ) VALUES ('$evento', '$devento', '$mevento', '$aevento', '$hora', '$minuto', '$local', '$conteudo', '$situacao')") or die(mysql_error());
            if($sql){
                $erro ="Cadastrado com sucesso!" ;

              } else{

                  $erro = "Não foi possivel cadastrar os dados";

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

<form name="form1" action="agenda_index.php" method="POST" style="padding-top:40px;" enctype="multipart/form-data">
<font color="#fffff">
<?php

if(isset($erro)){
    print '<div style="width:91%; background:#ff6600; color:#fff; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';
}

?>
<table width="900" border="0" bordercolor="#fffff" align="center" bgcolor="#000000"> 
  <tr> 
    <td height="200" colspan="2" valign="middle"><img src="images/LOGO.png" /></td> 

  </tr>


<tr>

<td colspan="2" align="center">.:: Inserir Evento no Calendário ::.</td>

</tr>

<tbody>

<tr>

<td width="20%" align="right">Evento:</td>

<td width="auto"><input type="text" name="evento" value="" class="campo" id="evento" /></td>

</tr>

<tr>

<td align="right">Data Evento:</td>

<td><input type='text' name='dia' value='' size='2'><b>/</b>
<input type='text' name='mes' value='' size='2'><b>/</b>
<input type='text' name='ano' value='' size='2'>
</td>

</tr>



<tr>

  <td align="right">Hora:</td>
  <td><input name="hora" type="text" id="hora"  size='2'value=''maxlength='2'> <b>:</b>
  <input name="minuto" type="text" id="minuto"  size='2'value=''maxlength='2'></td>



</tr>

<tr>

<td align="right">Local:</td>

<td><input name="local" type="text" class="campo" id="local"></td>

</tr>

<tr>

<td valign="top" align="right">Descricão:</td>

<td><textarea name="conteudo" rows="8" class="campo" >

</textarea></td>

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
