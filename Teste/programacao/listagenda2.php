<?PHPinclude("./conexao.php");include("./util.php");$Nome = $_COOKIE['Nome'];$Login = $_COOKIE['Login'];$Senha = $_COOKIE['Senha'];if(Logado($Login, $Senha) == "1"){?>
<html xmlns="http://www.w3.org/1999/xhtml"><head><META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1"> <title>Star Divulgações</title><style type="text/css"><!--body {	background-color: #CCCCCC;	background-image: url(images/fundo.jpg);	margin-top: 0px;	margin-bottom: 0px;}.style2 {	color: #666666;	font-weight: bold;	font-size: 24px;}a:link {	color: #0ed30e;	text-decoration: none;}a:visited {	color: #0ed30e;	text-decoration: none;}a:hover {	color: #b60088;	text-decoration: underline;}a:active {	color: #0ed30e;	text-decoration: none;}.style9 {	color: #666666;	font-size: 16px;}.style14 {color: #FFFFFF; font-weight: bold; font-style: italic; }.style16 {	font-family: "Segoe Script";	font-size: 14px;}.style19 {	font-size: 18px;	font-family: Arial, Helvetica, sans-serif;	font-weight: bold;	font-style: italic;}.style27 {color: #F5F5F5}.style28 {	font-family: "Segoe Script";	font-size: 14px;	color: #445566;}.style29 {color: #999999}.style32 {color: #00CCFF}.style34 {color: #66FF00}.style35 {font-size: 14px}.style36 {color: #FF00FF}.style37 {color: #000000}.style42 {	color: #F5F5F5;	font-size: 16px;}.style44 {color: #666666}.style45 {font-size: 16px}.style46 {color: #CBCBCB}.style48 {	color: #CCCCCC;	font-weight: bold;	font-size: 36px;}--></style></head><body><table width="900" border="0" bordercolor="#FFFFFF" align="center" bgcolor="#000000">  <font color="#fffff"> <tr>     <td height="200" colspan="2" valign="middle"><img src="images/LOGO.png" /></td>   </tr><tr>
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

$sqln = mysql_query("SELECT * FROM evento ORDER BY id DESC");
$num = mysql_num_rows($sqln);

if($num == 0){print "<td>";
print "Até o momento não temos nenhum evento cadastrado";print "<br /><br /></td>";print "</tr>";
}else{

$total_paginas = ceil($num/$max);
print "<tr>";print "<td colspan='7'>";print  "Temos ".$num."  evento cadastrados no site.";print "</td>";print "</tr>";print "<tr>";print "<td colspan='7'>";print "Lisando a página ".$pagina." de ".$total_paginas."!";print "<br /><br /></td>";print "</tr>";
$sqln = mysql_query("SELECT * FROM evento ORDER BY id DESC LIMIT ".$inicio.",".$max."");
$num = mysql_num_rows($sqln);
}
?>
  <?php
  print '
  <tr>
    <td width="1%" align="center" bgcolor="#202020" ><font color="#0ed30e">Logo</font></td>    <td width="18%" align="center" bgcolor="#202020" ><font color="#0ed30e">Nome</font></td>	<td width="18%" align="center" bgcolor="#202020" ><font color="#0ed30e">Local</font></td>	<td width="17%" align="center" bgcolor="#202020" ><font color="#0ed30e">Horario</font></td>	<td width="17%" align="center" bgcolor="#202020" ><font color="#0ed30e">data</font></td>	<td width="25%" align="center" bgcolor="#202020" ><font color="#0ed30e">atracao</font></td>	<td align="center" bgcolor="#202020"  width="2%" colspan="2"><font color="#0ed30e">.:: Acoes ::.</font></td>
  </tr>';
  
  for($i = 0; $i < $num; $i++){
  $logo = @mysql_result($sqln, $i, "logo");    $nome = @mysql_result($sqln, $i, "nome");  $local = @mysql_result($sqln, $i, "local");   $horario = @mysql_result($sqln, $i, "horario");    $data = @mysql_result($sqln, $i, "data");    $atracao = @mysql_result($sqln, $i, "atracao");  
  $id = @mysql_result($sqln, $i, "id"); 
  $n = $i + 1;
  $d = $i % 2;
  if($d == 0){$cor = "#2F4F4F";}else{$cor = "#696969"; }    print '<tr bgcolor='.$cor.'>';
    print '<td align="center">'."<img src='./foto/$logo' width='150' height='150'></td>";    print '<td align="center"><font color="white">'.$nome.'</font></td>';	print '<td align="center"><font color="white">'.$local.'</font></td>';	print '<td align="center"><font color="white">'.$horario."";	print '<td align="center"><font color="white">'.$data.'</font></td>';	print '<td align="center"><font color="white">'.$atracao.'</font></td>';    print '<td align="center"><a href="atualagenda2.php?id='.$id.'"><img src="bt_atualizar.png" width="20"><br />Altualizar</a></td>';    print '<td align="center"><a href="deletagenda2.php?id='.$id.'"><img src="excluir.jpg" width="20"><br />Excluir</a></td>';  print '</tr>';  print '<tr><td></td></tr>';  
  }

 print '<div style="text-align:center; margin-top: 30px;">';
if($pagina != 1){
print '<a href="listagenda2.php?'. $_SERVER['QUERY_STRING']. "&pagina=".($pagina - 1).'"><< anterior</a>';
}else{print "<tr><td colspan='7' align='center'>";
    print '<span style="color: #ccc;"><< anterior </span>';
}
if ($total_paginas > 1){ 
    for ($i=1; $i <= $total_paginas; $i++){ 
       if ($pagina == $i){        
          echo "<span class='al'> [".$pagina."] </span>"; 
       }else{           
          echo "<a href=\"listagenda2.php?" . $_SERVER['QUERY_STRING']."&pagina=".$i."\">&nbsp;".$i."&nbsp;</a> "; 
		  }
    } 
} 
if($pagina < $total_paginas){
print '<a href="listagenda2.php?'. $_SERVER['QUERY_STRING']. "&pagina=".($pagina + 1).'">próxima >></a>';
}else{
    print '<span style="color: #ccc;"> próxima >></span>';print "</td>";
}print '</tr>';
print '</div>';
  ?>    <tr height=280>  		<td colspan='7'>		  <a href="painelcontrole.php"><div align="center"><img src="voltar.jpg"><br />voltar</div></a>		</td>   </tr></font></table>
</body><?PHP}else{Mensagem_Erro();}?>
</html>