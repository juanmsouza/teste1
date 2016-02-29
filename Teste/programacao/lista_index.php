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
	color: #666666;
	text-decoration: none;
}
a:visited {
	color: #666666;
	text-decoration: none;
}
a:hover {
	color: #000000;
	text-decoration: underline;
}
a:active {
	color: #666666;
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
.style49 {
	color: #CCCCCC;
	font-size: 24px;
	font-weight: bold;
}
.style50 {color: #CCCCCC; font-size: 16px; font-weight: bold; }
.style51 {
	font-size: 18px;
	color: #009900;
	font-weight: bold;
}
.style56 {font-size: 18px; color: #00FF00; font-weight: bold; }
.style57 {
	color: #CCCCCC;
	font-weight: bold;
}
.style58 {font-size: 14px; color: #CCCCCC; }
.style60 {
	color: #00FF00;
	font-size: 18px;
}
-->

</style>

</head>

<body>

<?php

include "sql.php";

$max = 5;

$pagina = $_GET['pagina'];

if(!$pagina){

	$inicio = 0;

	$pagina = 1;

}else{

$inicio = ($pagina - 1) * $max;

}

$sqln = mysql_query("SELECT * FROM agenda ORDER BY devento,mevento,aevento DESC");

$num = mysql_num_rows($sqln);

$total_paginas = ceil($num/$max);

$sqln = mysql_query("SELECT * FROM agenda where situacao='A' order by devento,mevento,aevento,hora,minuto DESC LIMIT ".$inicio.",".$max."");

$n3 = mysql_num_rows($sqln);

?>
	 </div>

<fieldset style="width:10%; margin:0 auto;border:0">

  <?php

  print '<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">';
  
  for($a = 0; $a < $n3; $a++){
	  $id =	@mysql_result($sqln, $a, "id");
  
  $evento = @mysql_result($sqln, $a, "evento");
  
  $devento = @mysql_result($sqln, $a, "devento");

  $mevento = @mysql_result($sqln, $a, "mevento");
 
  $aevento = @mysql_result($sqln, $a, "aevento");
  
$dia=date("d");
$mes=date("m");
$ano=date("Y");
  if($ano<$aevento)
 {
 $z = $aevento - $ano;
 $x= $z*12;
 $mevento=$mevento+$x;            
 } 

 if($mes<$mevento)       
 {
 $y=$mevento-$mes;
 $w=$y*30;
 $devento=$evento+$w;             
 }
 $dif=$dia-$devento;
 if($dif>0)
 {
 $valida = mysql_query("UPDATE agenda SET  situacao='I' WHERE id='$id'")or die(mysql_error());
 }
 if($dif<0)
 {
 $valida = mysql_query("UPDATE agenda SET  situacao='A' WHERE id='$id'")or die(mysql_error());
 }
  }
  $s = mysql_query("SELECT * FROM agenda ORDER BY devento,mevento,aevento DESC");

$n2 = mysql_num_rows($s);

$total_paginas = ceil($n2/$max);
$s= mysql_query("SELECT * FROM agenda where situacao='A' order by devento,mevento,aevento,hora,minuto DESC LIMIT ".$inicio.",".$max."");
$n4 = mysql_num_rows($s);
  for($i = 0; $i < $n4; $i++){
	  $id =	@mysql_result($s, $i, "id");
  
  $evento = @mysql_result($s, $i, "evento");
  
  $devento = @mysql_result($s, $i, "devento");

  $mevento = @mysql_result($s, $i, "mevento");
 
  $aevento = @mysql_result($s, $i, "aevento");
 
  $local = @mysql_result($s, $i, "local");
  
  $q = $i + 1;

  $e = $i % 2;

  if($e == 0){$cor = "cinza";}else{$cor = "claro"; }
  print '<tr>';
  print '<td ><b><font color="#a7c03c">'.$devento.'/'.$mevento.'/'.$aevento.'</font></b></td>';
  print '</tr>';
  print '<tr>';
  print '<td><b><font color="b3b3b3">'.$evento.'</font></b></td>';
  print '</tr>';
  print '<tr>';
  print '<td><b><font color="b3b3b3">'.$local.'</font></b></td>';
  print '</tr>'; 
  print '<tr>';
  print '<td></td>';
  print '</tr>'; 

  }

  print '</table>';

  print '<div style="text-align:center; margin-top: 30px;">';

  ?>

</fieldset>

</body>

</html>