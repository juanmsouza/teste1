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
    $t1 = $_POST['t1'];
	$t2 = $_POST['t2'];
	$t3 = $_POST['t3'];
	$t4 = $_POST['t4'];
	$t5 = $_POST['t5'];
	$t6 = $_POST['t6'];
	$t7 = $_POST['t7'];
	$t8 = $_POST['t8'];
	$t9 = $_POST['t9'];	
	$tamanho = $_POST['tamanho'];
    $nome = $_POST['nome'];
    $local = $_POST['local']; 
	$h = $_POST['h'];
	$i = $_POST['i'];
	$h2 = $_POST['h2'];
	$i2 = $_POST['i2'];
	$horario = $h.":".$i;
	$horario2 = $h2.":".$i2;
	$ddd = $_POST['ddd'];
	$tl = $_POST['tel'];
	$tel = "(".$ddd.")".$tl;
	$espec = $_POST['espec'];
	
    if( empty($nome) || empty($local)  || empty($horario) || empty($horario2) || empty($tel) || empty($espec)){

        $erro = "Você deve preencher todos os campos!";

    }else{        
        include("./fotos.php");
      $sql = mysql_query("INSERT INTO estabelecimento(t1, t2, t3, t4, t5, t6, t7, t8, t9, logo, nome,local,horario,horario2,tel,espec) VALUES ('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$nomefoto', '$nome','$local','$horario','$horario2','$tel','$espec')") or die(mysql_error());
          			if($sql){ 
					
                    $erro ="Cadastrado com sucesso!" ;
                
                  

  } else{
                  $erro = "Não foi possivel cadastrar os dados";
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

<form name="form1" action="admin.php" method="POST" style="padding-top:40px;" enctype="multipart/form-data">
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

<td colspan="4"><div align="center"><b>.:: INSERIR ESTABELCIMENTO NO SISTEMA ::.</b></td>

</tr>


<tbody>
<tr>
<td width="20%"><div align="center">Serviço:</div></td>
<td width="auto"colspan="3"><div align="left">
<input type="checkbox" name="t1" value="bar" /> Bar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="t2" value="cafeteria" /> Cafeteria &nbsp;&nbsp;&nbsp;
<input type="checkbox" name="t3" value="churrascaria" /> Churrascaria
<input type="checkbox" name="t4" value="danceteria" /> Danceteria <br />
<input type="checkbox" name="t5" value="doceria" /> Doceria
<input type="checkbox" name="t6" value="lanchonete" /> Lanchonete
<input type="checkbox" name="t7" value="pizzaria" /> Pizzaria &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="t8" value="restaurante" /> Restaurante 
<input type="checkbox" name="t9" value="outros" /> Outros</div>
</td>
</tr>

<tr>
<td width="20%"><div align="center">Logo:</div></td>
<td width="auto"colspan="3"><div align="left"><input type="file"  name="logo[]" /></div></td>
</tr>

<tr>

<td width="20%"><div align="center">Nome:</div></td>

<td width="auto" colspan="3"><div align="left"><input type="text" name="nome" value="" class="campo" id="nome" size="55"/></div></td>
</tr>
<tr>
<td width="20%"><div align="center">Local:</div></td>
<td width="auto"colspan="3"><div align="left"><input type="text" name="local" value="" class="campo" id="local" size="55"/></div></td>
</tr>
<tr>
<td width="20%"><div align="center">Horário:</div></td>
<td width="auto"colspan="3">
<div align="left">
<input type="text" name="h" value="" class="campo" id="h" size="2" maxlength="2"/> : 
<input type="text" name="i" value="" class="campo" id="i" size="2" maxlength="2"/>
&nbsp;&nbsp; as &nbsp;&nbsp;
<input type="text" name="h2" value="" class="campo" id="h2" size="2" maxlength="2"/> : 
<input type="text" name="i2" value="" class="campo" id="i2" size="2" maxlength="2"/></div>
</td>
</tr>
<tr>
<td width="20%"><div align="center">Telefone:</div></td>
<td width="auto"colspan="3"><div align="left"><input type="text" name="ddd" value="" class="campo" id="ddd" size="2"maxlength="2"/>
<input type="text" name="tel" value="" class="campo" id="tel" size="47" maxlength="12"//></div></td>
</tr>


<tr>

<td valign="top"><div align="center">Especialidade: </div></td>

<td><div align="left"><textarea name="espec" rows="8" cols="41" class="campo"colspan="3">

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
