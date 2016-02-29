<?
include("./conexao.php");
include("./util.php");
$Nome = $_COOKIE['Nome'];
$Login = $_COOKIE['Login'];
$Senha = $_COOKIE['Senha'];
if(Logado($Login, $Senha) == "1")
{
?>
<?php

include "sql.php";


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
</style></head>


<body>

<form name="form1" action="admin.php" method="POST" style="padding-top:40px;">

<?php

if(isset($erro)){

    print '<div style="width:80%; background:#ff6600; color:#fff; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';

}

?>
<body>
<table width="100" height="550" border="0" align="center" bgcolor="#000000">
 
  <tr>
    <td height="260"><table width="950" border="0" align="center">
        <tr>
          <td width="387" rowspan="3"><img src="images/LOGO.png" width="350" height="180" /></td>
                  </tr>
        <tr>
          <td height="21">&nbsp;</td>
        </tr>
            </table>    </td>
  </tr>
  <tr> 
    <td colspan="3">
	 <table width="600" height="200" border="0" align="center"> 
      <tr> 
        <td>
          <a shape="rect" href="admin.php"><div align="center"><img src="ico_novo.jpg"><br />Adicionar Estabelecimento</div></a>
		</td>
		<td>
		  <a href="listagenda.php"><div align="center"><img src="bt_atualizar.png"><br />Alterar Estabelecimento</div></a>
		</td> 
		<td>
		  <a href="agenda.php"><div align="center"><img src="check.png"><br /><br />Verificar Estabelecimentos</div></a>
		</td>
        <td width="12">&nbsp;</td> 
	  </tr>
	        <tr> 
        <td>
          <a shape="rect" href="admin2.php"><div align="center"><img src="ico_novo.jpg"><br />Adicionar Evento</div></a>
		</td>
		<td>
		  <a href="listagenda2.php"><div align="center"><img src="bt_atualizar.png"><br />Alterar Evento</div></a>
		</td> 
		<td>
		  <a href="agenda2.php"><div align="center"><img src="check.png"><br /><br />Verificar Evento</div></a>
		</td>
		<td width="100">
		  <a href="finaliza.php"><div align="center"><img src="sair.jpg"><br />Sair do Sistema</div></a>
		</td>		

	  </tr>
	  </table>
	</td>
  </tr>
  </table>
</body> 
</html> 

</body>

</html>


<?
}
else
{
Mensagem_Erro();
}
?>