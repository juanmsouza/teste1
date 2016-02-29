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

	$t1 = $_POST['t1'];
	
	$t2 = $_POST['t2'];
	
	$t3 = $_POST['t3'];
	
	$t4 = $_POST['t4'];
	
	$t5 = $_POST['t5'];
	
	$t6 = $_POST['t6'];
	
	$t7 = $_POST['t7'];
	
	$t8 = $_POST['t8'];
	
	$t9 = $_POST['t9'];

	
     $nome = $_POST['nome'];
    
	$local = $_POST['local'];
    
	$horario = $_POST['horario'];  
	
	$horario2 = $_POST['horario2'];

	$tel = $_POST['tel'];
    
	$espec = $_POST['espec'];

     include("./fotos.php");

	if(!empty($nomefoto))
	{
	     
       $sql = mysql_query("UPDATE estabelecimento SET t1='$t1', t2='$t2', t3='$t3', t4='$t4', t5='$t5', t6='$t6', t7='$t7', t8='$t8', t9='$t9', logo='$nomefoto', nome='$nome', local='$local', horario='$horario', horario2='$horario2', tel='$tel', espec='$espec' WHERE id='$id'")or die(mysql_error());

            if($sql){

                $erro = "Dados alterados com sucesso!";
  
              } else{

                  $erro = "Não foi possivel alterar os dados";

              }
    }
	else
	{

	       $sql = mysql_query("UPDATE estabelecimento SET t1='$t1', t2='$t2', t3='$t3', t4='$t4', t5='$t5', t6='$t6', t7='$t7', t8='$t8', t9='$t9', nome='$nome', local='$local', horario='$horario', horario2='$horario2', tel='$tel', espec='$espec' WHERE id='$id'")or die(mysql_error());

            if($sql){

                $erro = "Dados alterados com sucesso!";
  
              } else{

                  $erro = "Não foi possivel alterar os dados";

              }
	}
}

$id = $_GET['id'];

$sql = mysql_query("SELECT * FROM estabelecimento WHERE id = '$id'");

$t1 = @mysql_result($sql, 0, "t1");

$t2 = @mysql_result($sql, 0, "t2");

$t3 = @mysql_result($sql, 0, "t3");

$t4 = @mysql_result($sql, 0, "t4");

$t5 = @mysql_result($sql, 0, "t5");

$t6 = @mysql_result($sql, 0, "t6");

$t7 = @mysql_result($sql, 0, "t7");

$t8 = @mysql_result($sql, 0, "t8");

$t9 = @mysql_result($sql, 0, "t9");



$nome = @mysql_result($sql, 0, "nome");

$local = @mysql_result($sql, 0, "local");

$horario = @mysql_result($sql, 0, "horario");

$horario2 = @mysql_result($sql, 0, "horario2");

$tel = @mysql_result($sql, 0, "tel");

$espec = @mysql_result($sql, 0, "espec");

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

<form name="form1" action="atualagenda.php" method="POST" style="padding-top:40px;" enctype="multipart/form-data">
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

<td colspan="4"><div align="center"><b>.:: INSERIR ESTABELCIMENTO NO SISTEMA ::.</b></td>

</tr>

<tbody>
<tr><td width="20%"><div align="right">Id:</div></td>
<td><div align="left"><input type="text" name="id" value="<?PHP echo $id; ?>" readonly></div></td>
</tr>
<tr> 
<td width="20%"><div align="right">Serviço:</div></td>
<td width="auto"colspan="3"><div align="left">
<?PHP
 if($t1!="")
 {
   print'<input type="checkbox" name="t1" value="bar" checked /> Bar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
 }
 else
 {
   print'<input type="checkbox" name="t1" value="bar" /> Bar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
 }
 if($t2!="")
 {
   print'<input type="checkbox" name="t2" value="cafeteria" checked /> Cafeteria &nbsp;&nbsp;&nbsp;';
 }
 else
 {
   print'<input type="checkbox" name="t2" value="cafeteria" /> Cafeteria &nbsp;&nbsp;&nbsp;';
 }
  if($t3!="")
 {
   print'<input type="checkbox" name="t3" value="churrascaria" checked /> Churrascaria';
 }
 else
 {
   print'<input type="checkbox" name="t3" value="churrascaria" /> Churrascaria';
 }
  if($t4!="")
 {
   print'<input type="checkbox" name="t4" value="danceteria" checked /> Danceteria <br />';
 }
 else
 {
   print'<input type="checkbox" name="t4" value="danceteria" /> Danceteria <br />';
 }
  if($t5!="")
 {
   print'<input type="checkbox" name="t5" value="doceria" checked /> Doceria';
 }
 else
 {
   print'<input type="checkbox" name="t5" value="doceria" /> Doceria';
 }
  if($t6!="")
 {
   print'<input type="checkbox" name="t6" value="lanchonete" checked /> Lanchonete';
 }
 else
 {
   print'<input type="checkbox" name="t6" value="lanchonete" /> Lanchonete';
 }
  if($t7!="")
 {
   print'<input type="checkbox" name="t7" value="pizzaria" checked /> Pizzaria &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
 }
 else
 {
   print'<input type="checkbox" name="t7" value="pizzaria" /> Pizzaria &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
 }
  if($t8!="")
 {
   print'<input type="checkbox" name="t8" value="restaurante" checked /> Restaurante ';
 }
 else
 {
   print'<input type="checkbox" name="t8" value="restaurante" /> Restaurante ';
 }
  if($t9!="")
 {
   print'<input type="checkbox" name="t9" value="outros" checked /> Outros</div>';
 }
 else
 {
   print'<input type="checkbox" name="t9" value="outros" /> Outros</div>';
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
<td width="20%"><div align="right">Local:</div></td>
<td width="auto"colspan="3"><div align="left"><input type="text" name="local" value="<?PHP echo $local;?>" class="campo" id="local" size="55"/></div></td>
</tr>
<tr>
<td width="20%"><div align="right">Horário:</div></td>
<td width="auto"colspan="3">
<div align="left">
<input type="text" name="horario" value="<?PHP echo $horario;?>" class="campo" id="h" size="5" maxlength="5"/>
&nbsp;&nbsp; as &nbsp;&nbsp;
<input type="text" name="horario2" value="<?PHP echo $horario2;?>" class="campo" id="h" size="5" maxlength="5"/>
</div></td>
</tr>
<tr>
<td width="20%"><div align="right">Telefone:</div></td>
<td width="auto"colspan="3"><div align="left"><input type="text" name="tel" value="<?PHP echo $tel;?>" class="campo" id="tel" size="55"/></div></td>
</tr>


<tr>

<td valign="top"><div align="right">Especialidade: </div></td>

<td><div align="left"><textarea name="espec" rows="8" cols="41" class="campo"colspan="3">
<?PHP
echo $espec;
?>
</textarea></div></td>

</tr>

<tr>

<td></td>

<td><input type="submit" value="Cadastrar Establecimento" /><input type="hidden" name="done" value="" /></td>

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
