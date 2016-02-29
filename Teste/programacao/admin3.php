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
    $nome = $_POST['nome'];
    $local = $_POST['local']; 
	
    if( empty($nome) || empty($local)){

        $erro = "Você deve preencher todos os campos!";

    }else{        
        include("./fotos2.php");
      $sql = mysql_query("INSERT INTO anuncio( logo, nome,local) VALUES ('$nomefoto', '$nome','$local')") or die(mysql_error());
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

<form name="form1" action="admin3.php" method="POST" style="padding-top:40px;" enctype="multipart/form-data">
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
<input type="radio" name="local" value="topo1" /> Anuncio Topo 1
<input type="radio" name="local" value="topo2" /> Anuncio Topo 2<br />
<input type="radio" name="local" value="anuncio1" /> Anuncio 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="local" value="anuncio2" /> Anuncio 2 <br />
<input type="radio" name="local" value="anuncio3" /> Anuncio 3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="local" value="anuncio4" /> Anuncio 4<br />
<input type="radio" name="local" value="anuncio5" /> Anuncio 5
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
