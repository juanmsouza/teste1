
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Estabelecimento</title>

<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 18px;
}
.style2 {color: #000000}
body {
	background-color: #CBFF97;
	margin-top: 0px;
	margin-bottom: 0px;
}
 
ul#menu { width: 100%; height: 43px; background: #FFF url("images/menu-bg.gif") top left repeat-x; font-size: 0.8em; font-family: "Lucida Grande", Verdana, sans-serif; font-weight: bold; list-style-type: none; margin: 0; padding: 0; }
ul#menu li { display: block; float: left; margin: 0 0 0 5px; }
ul#menu li a { height: 43px; color: #777; text-decoration: none; display: block; float: left; line-height: 200%; padding: 8px 15px 0; }
ul#menu li a:hover { color: #333; }
ul#menu li a.current{ color: #FFF; background: #FFF url("images/current-bg.gif") top left repeat-x; padding: 5px 15px 0; }
.style12 {font-weight: bold}
.style13 {
	font-weight: bold;
	font-size: 24px;
}
.style18 {color: #00CCFF}
.style20 {color: #00CC00}
.style21 {color: #999999}
.style22 {color: #00cc00}
 
-->
.cinza{

background:#f0f0f0;

height:20px;

}

.claro{

background:#f9f9f9;

height:20px;

}

.fonte{

color:#FFFFFF;

font-weight:bold;

height:25px;

}
a:link {

    color: #000000;

    text-decoration: none;

}

a:visited {

    text-decoration: none;

    color: #000000;

}

a:hover {

    text-decoration: underline;

    color: #FF9900;

}

a:active {

    text-decoration: none;

}
body,td,th {

    font-family: Verdana;

    font-size: 11px;

    color: #000000;

}

</style>

</head>

<body>
<table width="900" border="0" align="center" bgcolor="#FFFFFF"> 
  <tr> 
    <td height="200" colspan="3" valign="middle"><img src="logo.jpg" /></td> 
    <td width="238" colspan="4"><div align="center"><img src="canstock3826577.jpg" width="150" height="112" /><br /> 
        <span class="style1">EMERGÊNCIA<br /> 
        <span class="style2">(12) 3029-6807<br /> 
(12) 9711-5742</span></span></div></td> 
  </tr><tr>

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



$sqln = mysql_query("SELECT * FROM estabelecimento ORDER BY id DESC");

$num = mysql_num_rows($sqln);



if($num == 0){
print "<td>";
print "Até o momento não temos nenhum estabelecimento cadastrado";
print "<br /><br /></td>";
print "</tr>";
}else{



$total_paginas = ceil($num/$max);


print "<tr>";
print "<td colspan='7'>";
print  "Temos ".$num."  estabelecimento cadastrados no site.";
print "</td>";
print "</tr>";

$sqln = mysql_query("SELECT * FROM estabelecimento ORDER BY id DESC LIMIT ".$inicio.",".$max."");

$num = mysql_num_rows($sqln);

}

?>

  <?php



  for($i = 0; $i < $num; $i++){

  $logo = @mysql_result($sqln, $i, "logo");
  
  $nome = @mysql_result($sqln, $i, "nome");

  $local = @mysql_result($sqln, $i, "local");
 
  $horario = @mysql_result($sqln, $i, "horario");
  
  $tel = @mysql_result($sqln, $i, "tel");
  
  $espec = @mysql_result($sqln, $i, "esec");
    
  $id = @mysql_result($sqln, $i, "id"); 

  $n = $i + 1;

  $d = $i % 2;

  if($d == 0){$cor = "cinza";}else{$cor = "claro"; }

  print '<tr class='.$cor.'>';


   


  print '<td align="left" colspan="7" bgcolor="#ffffff"><b><a href="mostra.php?id='.$id.'" target="_blank">*'.$titulo.'</b></td>';

  print '</tr>';
 
  }
  print '<tr height=380><td colspan="7"><br /><br /></td></tr>';


 print '<div style="text-align:center; margin-top: 30px;">';


print '</div>';

  ?>

</table>

</body>
