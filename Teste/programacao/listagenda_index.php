<?php

include "sql.php";
include "util.php";
$Nome = $_COOKIE['Nome'];
$Login = $_COOKIE['Login'];
$Senha = $_COOKIE['Senha'];
if(Logado($Login, $Senha) == "1")
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Agenda de Eventos</title>

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


<?php

include "sql.php";

		

$max = 10;



$pagina = $_GET['pagina'];

if(!$pagina){

	$inicio = 0;

	$pagina = 1;

}else{

$inicio = ($pagina - 1) * $max;

}



$sqln = mysql_query("SELECT * FROM agenda ORDER BY id DESC");

$num = mysql_num_rows($sqln);


?>

<form name="form1" action="listagenda_index.php" method="POST" style="padding-top:40px;" enctype="multipart/form-data">
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

<td colspan="2" align="center">Eventos Agendados</td>
</tr>
<tr>
<td>

  <?php

  print '<table width="auto" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td width="10%" align="center" bgcolor="#202020" ><font color="#0ed30e"> Nº</font></td>

        <td align="center" bgcolor="#202020" ><font color="#0ed30e">Nome do Eventos</font></td>
	<td align="center" bgcolor="#202020" ><font color="#0ed30e">Dia/Mês/Ano</font></td>
	<td align="center" bgcolor="#202020" ><font color="#0ed30e">Hora:Minuto</font></td>
	<td align="center" bgcolor="#202020" ><font color="#0ed30e">Local</font></td>
	<td align="center" bgcolor="#202020" ><font color="#0ed30e">Descrição</font></td>


    <td colspan="2" align="center" bgcolor="#202020" width="15%"><font color="#0ed30e">.:: Ações ::.</font></td>

  </tr>';

  

  for($i = 0; $i < $num; $i++){

  $evento = @mysql_result($sqln, $i, "evento");
  
  $devento = @mysql_result($sqln, $i, "devento");

  $mevento = @mysql_result($sqln, $i, "mevento");
 
  $aevento = @mysql_result($sqln, $i, "aevento");
  
  $hora = @mysql_result($sqln, $i, "hora");

  $minuto = @mysql_result($sqln, $i, "minuto");

  $local = @mysql_result($sqln, $i, "local");
  
  $conteudo = @mysql_result($sqln, $i, "conteudo");
  
  $id = @mysql_result($sqln, $i, "id"); 

  $n = $i + 1;

  $d = $i % 2;

  if($d == 0){$cor = "#2F4F4F";}else{$cor = "#696969"; }

  print '<tr bgcolor='.$cor.'>';

  print '<td align="center">'.$n.'</td>';

    print '<td align="center">'.$evento.'</td>';
  print '<td align="center">'.$devento.'/'.$mevento.'/'.$aevento.'</td>';
  print '<td align="center">'.$hora.':'.$minuto.'</td>';
  print '<td align="center">'.$local.'</td>';
    print '<td align="center">'.$conteudo.'</td>';
 print '<td align="center"><a href="atualagenda_index.php?id='.$id.'"><img src="bt_atualizar.png" width="20"><br />Altualizar</a></td>';
    print '<td align="center"><a href="deletagenda_index.php?id='.$id.'"><img src="excluir.jpg" width="20"><br />Excluir</a></td>';

  print '</tr>';

  }

  

  print '</table>';

 print '<div style="text-align:center; margin-top: 30px;">';

if($pagina != 1){

print '<a href="listagenda_index.php?'. $_SERVER['QUERY_STRING']. "&pagina=".($pagina - 1).'"><< anterior</a>';

}else{

    print '<span style="color: #ccc;"><< anterior </span>';

}

if ($total_paginas > 1){ 

    for ($i=1; $i <= $total_paginas; $i++){ 

       if ($pagina == $i){        

          echo "<span class='al'> [".$pagina."] </span>"; 

       }else{           

          echo "<a href=\"listagenda_index.php?" . $_SERVER['QUERY_STRING']."&pagina=".$i."\">&nbsp;".$i."&nbsp;</a> "; 

		  }

    } 

} 

if($pagina < $total_paginas){

print '<a href="listagenda_index.php?'. $_SERVER['QUERY_STRING']. "&pagina=".($pagina + 1).'">próxima >></a>';

}else{

    print '<span style="color: #ccc;"> próxima >></span>';

}

print '</div>';

  ?>
  </td>
</tr>
  <tr height=220>
  		<td>
		  <a href="painelcontrole.php"><div align="center"><img src="voltar.jpg"><br />voltar</div></a>
		</td> 
</tr>
</table>
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