<?PHP
include("conexao.php");
include ("sql.php");




 $sqln = mysql_query("SELECT * FROM anuncio ORDER BY id ");

 $num = mysql_num_rows($sqln);

 $sqln = mysql_query("SELECT * FROM anuncio ORDER BY id ");

 $num = mysql_num_rows($sqln);


 $i = 0;
while($i<$num){

 
  $logo = @mysql_result($sqln, $i, "logo");
    
  $id = @mysql_result($sqln, $i, "id"); 
if($i==0)
{
 $a="<img src='./foto/$logo' width='553' height='100'>  ";
}
if($i==1)
{
 $b="<img src='./foto/$logo' width='553' height='100'>  ";
}
if($i==2)
{
 $c="<img src='./foto/$logo' width='450' height='120'>  ";
}
if($i==3)
{
 $d="<img src='./foto/$logo' width='450' height='120'>  ";
} 
if($i==4)
{
 $e="<img src='./foto/$logo' width='450' height='120'>  ";
} 
if($i==5)
{
 $f="<img src='./foto/$logo' width='450' height='120'>  ";
}
if($i==6)
{
 $g="<img src='./foto/$logo' width='450' height='120'>  ";
}
if($i==7)
{
 $h="<img src='./foto/$logo' width='450' height='120'>  ";
}
  $i++;
 }



?>