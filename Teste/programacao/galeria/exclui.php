<?PHP
 if(isset($_POST['done'])){ 
   $tamanho = $_POST['qtd'];
   
   $foto = $_POST['foto'];
   
   for($i=0;$i<$tamanho;$i++)
   {
		if($foto[$i] !="")
		{
		   echo "$foto[$i] Excluído com sucesso!<br>";
		   unlink("./fotos/$foto[$i]");
	  

		 }
		
   
   }
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1"> 
<title>Star Divulgações</title>
<link rel="stylesheet"  href="css/galeria.css"  type="text/css"  media="screen" />
<style type="text/css">
<!--

body {
	background-color: #CCCCCC;
	background-image: url(../images/fundo.jpg);
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
<table width="100" height="550" border="0" align="center" bgcolor="#000000">
 
  <tr>
    <td height="260"><table width="950" border="0" align="center">
        <tr>
          <td width="387" rowspan="3"><img src="../images/LOGO.png" width="350" height="180" /></td>
                  </tr>
            </table>   
			</td>
  </tr>
  <tr>  <td><div align="center">

<table border="2" bgcolor="#00000">
<tr width="779">
<p>&nbsp;</p>
<form action="exclui.php" method="POST">
<td width="779"><br>
<?
    $dir = './fotos/';
	
	if ($handle = opendir($dir)) 
	{
		$cont = 0;
		while ($file = readdir($handle)) 
		{
			if (filetype($dir.'/'.$file) == 'file')
			 {
				$pos = 0;
				$pos = strrpos($file, ".jpg");
				if($pos !=0)
				{
				  echo "&nbsp;<input type='checkbox' name='foto[$cont]' value='$file'>&nbsp;<img src=\"thumbs.php?img=$dir/$file\" class=\"thumbs\">&nbsp;&nbsp;";
				  $cont++;
				}
							if (filetype($dir.'/'.$file) == 'file')
			 {
				$pos = 0;
				$pos = strrpos($file, ".jpeg");
				if($pos !=0)
				{
				  echo "&nbsp;<input type='checkbox' name='foto[$cont]' value='$file'>&nbsp;<img src=\"thumbs.php?img=$dir/$file\" class=\"thumbs\">&nbsp;&nbsp;";
				  $cont++;
				}
			 }
			 }
			 
		} 

		closedir($handle);
	} //fecha o if
?>
</table>
</div>
<div align="center"> <input type="submit" value="execluir"><input type="hidden" name="done" value="" />
</div><input type="hidden" name="qtd" value="<?=$cont?>">
</td>
</form>
  <tr height=220><td>
  	
		  <a href="../painelcontrole.php"><div align="center"><img src="../voltar.jpg"><br />voltar</div></a>
		
  </td></tr>
</table>
</body>
</html>