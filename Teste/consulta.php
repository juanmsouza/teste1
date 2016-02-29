<?PHP
print  '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
';
include("./programacao/conexao.php");
include ("./programacao/sql.php");

$z = $_GET['z'];
$x = $_GET['x'];
 $max = 10;

 if($z==0)
 {
 $x='';
 }

 $pagina = $_GET['pagina'];

	if(!$pagina)
	 {

		$inicio = 0;

		$pagina = 1;


	 }
	  else{

		  $inicio = ($pagina - 1) * $max;

		}
if($x==1)
{

$sqln = mysql_query("SELECT * FROM estabelecimento where t1!='' ORDER BY id DESC");

$num = mysql_num_rows($sqln);

$sqln = mysql_query("SELECT * FROM estabelecimento where t1!=''  ORDER BY id DESC LIMIT ".$inicio.",".$max."");

$num = mysql_num_rows($sqln);
}
if($x==2)
{
$sqln = mysql_query("SELECT * FROM estabelecimento where t2!='' ORDER BY id DESC");

$num = mysql_num_rows($sqln);

$sqln = mysql_query("SELECT * FROM estabelecimento where t2!='' ORDER BY id DESC LIMIT ".$inicio.",".$max."");

$num = mysql_num_rows($sqln);
}
if($x==3)
{

$sqln = mysql_query("SELECT * FROM estabelecimento where t3!='' ORDER BY id DESC");

$num = mysql_num_rows($sqln);

$sqln = mysql_query("SELECT * FROM estabelecimento where t3!='' ORDER BY id DESC LIMIT ".$inicio.",".$max."");

$num = mysql_num_rows($sqln);
}
if($x==4)
{

$sqln = mysql_query("SELECT * FROM estabelecimento where t4!='' ORDER BY id DESC");

$num = mysql_num_rows($sqln);

$sqln = mysql_query("SELECT * FROM estabelecimento where t4!='' ORDER BY id DESC LIMIT ".$inicio.",".$max."");

$num = mysql_num_rows($sqln);
}
if($x==5)
{
$sqln = mysql_query("SELECT * FROM estabelecimento where t5!='' ORDER BY id DESC");

$num = mysql_num_rows($sqln);

$sqln = mysql_query("SELECT * FROM estabelecimento where t5!='' ORDER BY id DESC LIMIT ".$inicio.",".$max."");

$num = mysql_num_rows($sqln);
}
if($x==6)
{
$sqln = mysql_query("SELECT * FROM estabelecimento where t6!='' ORDER BY id DESC");

$num = mysql_num_rows($sqln);

$sqln = mysql_query("SELECT * FROM estabelecimento where t6!='' ORDER BY id DESC LIMIT ".$inicio.",".$max."");

$num = mysql_num_rows($sqln);
}
if($x==7)
{
$sqln = mysql_query("SELECT * FROM estabelecimento where t7!='' ORDER BY id DESC");

$num = mysql_num_rows($sqln);

$sqln = mysql_query("SELECT * FROM estabelecimento where t7!='' ORDER BY id DESC LIMIT ".$inicio.",".$max."");

$num = mysql_num_rows($sqln);
}
if($x==8)
{
$sqln = mysql_query("SELECT * FROM estabelecimento where t8!='' ORDER BY id DESC");

$num = mysql_num_rows($sqln);

$sqln = mysql_query("SELECT * FROM estabelecimento where t8!='' ORDER BY id DESC LIMIT ".$inicio.",".$max."");

$num = mysql_num_rows($sqln);
}
if($x==9)
{
$sqln = mysql_query("SELECT * FROM estabelecimento where t9!='' ORDER BY id DESC");

$num = mysql_num_rows($sqln);

$sqln = mysql_query("SELECT * FROM estabelecimento where t9!='' ORDER BY id DESC LIMIT ".$inicio.",".$max."");

$num = mysql_num_rows($sqln);
}
if($x=="")
{
 $sqln = mysql_query("SELECT * FROM estabelecimento ORDER BY id DESC");

 $num = mysql_num_rows($sqln);

 $sqln = mysql_query("SELECT * FROM estabelecimento ORDER BY id DESC LIMIT ".$inicio.",".$max."");

 $num = mysql_num_rows($sqln);

}
 $i = 0;
while($i<$num){

 
  $logo = @mysql_result($sqln, $i, "logo");
    
  $nome = @mysql_result($sqln, $i, "nome");

  $t1 = @mysql_result($sqln, $i, "t1");

  $t2 = @mysql_result($sqln, $i, "t2");

  $t3 = @mysql_result($sqln, $i, "t3");

  $t4 = @mysql_result($sqln, $i, "t4");

  $t5 = @mysql_result($sqln, $i, "t5");
  
  $t6 = @mysql_result($sqln, $i, "t6");
  
  $t7 = @mysql_result($sqln, $i, "t7");

  $t8 = @mysql_result($sqln, $i, "t8");

  $t9 = @mysql_result($sqln, $i, "t9");

  $local = @mysql_result($sqln, $i, "local");
 
  $horario = @mysql_result($sqln, $i, "horario"); 
  
  $horario2 = @mysql_result($sqln, $i, "horario2");
  
  $tel = @mysql_result($sqln, $i, "tel");
 
  $espec = @mysql_result($sqln, $i, "espec");
  
  $id = @mysql_result($sqln, $i, "id"); 

  $n = $i + 1;

  $d = $i % 2;
  
  $texto="";

if($t1=='bar')
{ if($texto!='')
	{
	 $texto += ",";
	}
$texto = $texto+"bar";
}
if($t2=='cafeteria')
{
  if($texto!='')
	{
	 $texto += ",";
	}
$texto = $texto+"cafeteria";
}
if($t3=='churrascaria')
{
  if($texto!='')
	{
	 $texto += ",";
	}
$texto = $texto+"churrascaria";
}
if($t4=='danceteria')
{
  if($texto!='')
	{
	 $texto += ",";
	}
$texto = $texto+"danceteria";
}
if($t5=='doceria')
{
  if($texto!='')
	{
	 $texto += ",";
	}
$texto = $texto+"doceria";
}
if($t6=='lanchonete')
{
  if($texto!='')
	{
	 $texto += ",";
	}
$texto = $texto+"lanchonete";
}
if($t7=='pizzaria')
{
  if($texto!='')
	{
	 $texto += ",";
	}
$texto = $texto+"pizzaria";
}
if($t8=='restaurante')
{
  if($texto!='')
	{
	 $texto += ",";
	}
$texto = $texto+"restaurante";
}
if($t9=='outros')
{
  if($texto!='')
	{
	 $texto += ",";
	}
$texto = $texto+"outros";
}
$texto = ''.$t1.' '.$t2.' '.$t3.' '.$t4.' '.$t5.' '.$t6.' '.$t7.' '.$t8.' '.$t9.'';
  print'<table width="700" border="0">          
  <tr background="images/b_02.png" width="auto" height="auto">
              <td height="150"><div align="center"><table width="680" border="0" align="center">
                <tr>
        ';
    print '<td width="167" height="190"><div align="center">'."<img src='./programacao/foto/$logo' width='150' height='150'></div></td>";
    print '<td width="510" valign="top"><div align="center"><p class="style51">'.$nome.'</p></div>';
	print '<p class="style51"><span class="style52">'.$espec.'<br />';
	print 'Localidade:  '.$local.'<br />';
	print 'Estamos aberto das '.$horario." as ".$horario2.'<br />';
	print 'Telefone para contato:  '.$tel.'<br />';
	print 'Oferecemos serviços de:  '.$texto.'</p></span></td></tr>';
    print '</table></div>';
	print '</td></tr></table>';
  
  $i++;
 }
if($num==0)
 { 

  print'<table width="700" border="0">          
  <tr background="images/b_02.png">
              <td height="150"><div align="center"><table width="680" border="0" align="center">
                <tr>
        ';
    print '<td width="167" height="190"><div align="center">'."</div></td>";
    print '<td width="510" valign="top"><p class="style51"><span class="style52"><br />não possui nenhum estabelecimento cadastrado.</span></p>';
	print '<p class="style51"><span class="style52"><br />';
	print '<br />';
	print '<br />';
	print '<br />';
	print '</p></span></td></tr>';
    print '</table></div>';
	print '</td></tr></table>';
 
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

          echo "<a href=\"./programacao/listagenda.php?" . $_SERVER['QUERY_STRING']."&pagina=".$i."\">&nbsp;".$i."&nbsp;</a> "; 

		  }

    } 

} 

if($pagina < $total_paginas){

print '<a href="./programacao/listagenda.php?'. $_SERVER['QUERY_STRING']. "&pagina=".($pagina + 1).'">próxima >></a>';

}else{

    print '<span style="color: #ccc;"> próxima >></span>';

}

print '</div>';

	echo"Deu certo";

?>