<?PHP
<html xmlns="http://www.w3.org/1999/xhtml">
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
print "At� o momento n�o temos nenhum estabelecimento cadastrado";
}else{

$total_paginas = ceil($num/$max);

$sqln = mysql_query("SELECT * FROM estabelecimento ORDER BY id DESC LIMIT ".$inicio.",".$max."");
$num = mysql_num_rows($sqln);
}
?>
  <?php
  print '
  <tr>
    <td width="2%" align="center" bgcolor="#202020"  ><font color="#0ed30e">N</font></td>
  </tr>';
  
  for($i = 0; $i < $num; $i++){
  $logo = @mysql_result($sqln, $i, "logo");
  $id = @mysql_result($sqln, $i, "id"); 
  $n = $i + 1;
  $d = $i % 2;
  if($d == 0){$cor = "#2F4F4F";}else{$cor = "#696969"; }
    print '<td align="center"><font color="white">'.$n.'</font></td>';
  }

 print '<div style="text-align:center; margin-top: 30px;">';
if($pagina != 1){
print '<a href="listagenda.php?'. $_SERVER['QUERY_STRING']. "&pagina=".($pagina - 1).'"><< anterior</a>';
}else{
    print '<span style="color: #ccc;"><< anterior </span>';
}
if ($total_paginas > 1){ 
    for ($i=1; $i <= $total_paginas; $i++){ 
       if ($pagina == $i){        
          echo "<span class='al'> [".$pagina."] </span>"; 
       }else{           
          echo "<a href=\"listagenda.php?" . $_SERVER['QUERY_STRING']."&pagina=".$i."\">&nbsp;".$i."&nbsp;</a> "; 
		  }
    } 
} 
if($pagina < $total_paginas){
print '<a href="listagenda.php?'. $_SERVER['QUERY_STRING']. "&pagina=".($pagina + 1).'">pr�xima >></a>';
}else{
    print '<span style="color: #ccc;"> pr�xima >></span>';
}
print '</div>';
  ?>
</body>
</html>