<?PHP
include "sql.php";

if(isset($_POST['done'])){

    $logo = $_POST['logo'];
    $nome = $_POST['nome'];
    $local = $_POST['local'];
    $horario = $_POST['horario'];	
	$tel = $_POST['tel'];
    $espec = $_POST['espec'];	

       $sql = mysql_query("UPDATE estabelecimento SET nome='$nome', local='$local', horario='$horario', tel='$tel', espec='$espec' WHERE id='$id'")or die(mysql_error());

            if($sql){

                $erro = "Dados alterados com sucesso!";

              } else{

                  $erro = "Não foi possivel alterar os dados";

              }
}

$id = $_GET['id'];

$sql = mysql_query("SELECT * FROM estabelecimento WHERE id = '$id'");

$logo = @mysql_result($sql, 0, "logo");

$nome = @mysql_result($sql, 0, "nome");

$local = @mysql_result($sql, 0, "local");

$horario = @mysql_result($sql, 0, "horaio");

$tel = @mysql_result($sql, 0, "tel");

$id = @mysql_result($sql, 0, "id");

?>

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
.campo{

width:400px;

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
<body>

<form name="form1" action="admin.php" method="POST" style="padding-top:40px;">

<?php

if(isset($erro)){
    print '<div style="width:80%; background:#ff6600; color:#fff; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';
}

?>


<table width="900" height="500" border="0" align="center" bgcolor="#FFFFFF"> 
  <tr> 
    <td height="200" colspan="2" valign="middle"><img src="logo.jpg" /></td> 
    <td width="238" colspan="2"><div align="center"><img src="canstock3826577.jpg" width="150" height="112" /><br /> 
        <span class="style1">EMERGÊNCIA<br /> 
        <span class="style2">(12) 3029-6807<br /> 
(12) 9711-5742</span></span></div></td> 
  </tr>
  <tr>

<?php

include "sql.php";

		

$max = 100;



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
print "Até o momento não temos nenhuma estabelecimento cadastrado";
print "<br /><br /></td>";
print "</tr>";
}else{



$total_paginas = ceil($num/$max);


print "<tr height='10'>";
print "<td colspan='7'>";
print  "Temos ".$num."  estabelecimentos cadastrados no site.";
print "</td>";
print "</tr>";

$sqln = mysql_query("SELECT * FROM divulgacao ORDER BY titulo  LIMIT ".$inicio.",".$max."");

$num = mysql_num_rows($sqln);

}




print '<tr>';
  print '<td height="50" align="left" width="50" bgcolor="#ffffff">';
  for($i = 0; $i < $num; $i++){

  $logo = @mysql_result($sqln, $i, "logo");
  
  $nome = @mysql_result($sqln, $i, "nome");
  
  $local = @mysql_result($sqln, $i, "local");

  $horario = @mysql_result($sqln, $i, "horario");
 
  $tel = @mysql_result($sqln, $i, "tel");
  
  $espec = @mysql_result($sqln, $i, "espec");
  
  $id = @mysql_result($sqln, $i, "id"); 

  $n = $i + 1;

  $d = $i % 2;


  print '<b><a href="mostra.php?id='.$id.'">*'.$titulo.'</a></b><br />';
 
  }

print '</td>';
  


 print '<div style="text-align:center; margin-top: 30px;">';


print '</div>';
$id = $_GET['id'];

$sql = mysql_query("SELECT * FROM estabelecimento WHERE id = '$id'");

$logo = @mysql_result($sql, 0, "logo");

$nome = @mysql_result($sql, 0, "nome");

$local = @mysql_result($sql, 0, "local");

$horario = @mysql_result($sql, 0, "horario");

$tel = @mysql_result($sqln, $i, "tel");

$espec = @mysql_result($sqln, $i, "espec");

$id = @mysql_result($sql, 0, "id");
  ?>

<td width="350" height="auto" colspan="2"><div align="center"><?php echo $nome; ?></div>
<div align="center"><?php echo $local; ?></div>
<div align="right">(<?php echo $horario; ?></div>
<div align="center"><?php echo $tel; ?></div>
<div align="right">(<?php echo $espec; ?></div></td>
</tr>
 <tr height="auto">
 <td></td>
 </tr>
</table>

</form>

</body>

</html>
