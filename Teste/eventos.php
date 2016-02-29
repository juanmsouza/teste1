<?
include("consulta2.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
		font-size: 14px;
}
.style58 {font-size: 14px; color: #CCCCCC; }
.style60 {
	color: #00FF00;
	font-size: 18px;
}
-->
</style></head>

<body>
<table width="1000" border="0" align="center" bgcolor="#000000">
  <tr>
    <td height="260"><table width="950" border="0" align="center">
        <tr>
          <td width="387" rowspan="3"><img src="images/LOGO.png" width="350" height="180" /></td>
          <td width="553" height="100" ><?echo $a;?></td>
        </tr>
        <tr>
          <td height="21">&nbsp;</td>
        </tr>
        <tr>
          <td height="100"><?echo $b;?></td>
        </tr>
    </table>    </td>
  </tr>
  <tr>
    <td height="30" bgcolor="#F5F5F5"><span class="style19"><span class="style27">__</span> <span class="style45"><a href="index.php">Home</a> <span class="style27">_<span class="style44">|</span>_</span></span> <span class="style45"><a href="eventos.php">Eventos</a></span><span class="style45"> <span class="style27">_<span class="style44">|</span>_</span> <a href="estabelecimentos.php">Gastronomia</a></span><span class="style45"> <span class="style27">_<span class="style44">|</span>_</span></span> <span class="style45"><a href="eventos.php"></a></span><span class="style45"><a href="fotos.php">Fotos</a></span><span class="style45"> <span class="style27">_<span class="style44">|</span>_</span></span> <span class="style45"><a href="eventos.php"></a></span><span class="style45"><a href="contato.php">Contato</a></span></span></td>
  </tr>
  <tr>
    <td height="400" class="style16"><table width="980" border="0" align="center">
      <tr>
<form id="aform">
        <td width="250" valign="top"><p class="style49"><span class="style37">__</span>Tipos</p>
          <a href="eventos.php?x=1"><img src="images/star.png" width="25" height="25" /> <span class="style49"><span class="style45"> Baladas</span></span></a><br />
          <a href="eventos.php?x=2"><img src="images/star.png" width="25" height="25" /> <span class="style49"><span class="style45">  Exposição</span></span></a><br />
          <a href="eventos.php?x=3"><img src="images/star.png" width="25" height="25" /> <span class="style49"><span class="style45">  Festas</span></span></a><br />
          <a href="eventos.php?x=4"><img src="images/star.png" width="25" height="25" /> <span class="style49"><span class="style45">  Show</span></span></a></p>
          <p class="style50"><img src="images/barra.png" width="230" height="10" /></p>
          <p class="style49"><span class="style37">__</span>Locais</p>
<?/*
<select id="mymenu" size="1">
<option value="nothing" selected="selected">Todos</option>
<option value="eventos.php?y=1">Jacareí</option>
<option value="eventos.php?y=2">Litoral Norte</option>
<option value="eventos.php?y=3">São José dos Campos</option>
<option value="eventos.php?y=4" selected="selected">Taubaté</option>
<option value="eventos.php?y=5">Outros</option>

</select>
</form>*/?>
          <a href="eventos.php?y=1"><img src="images/star.png" width="25" height="25" /> <span class="style49"><span class="style45"> Jacareí</span></span></a><br />
          <a href="eventos.php?y=2"><img src="images/star.png" width="25" height="25" /> <span class="style49"><span class="style45"> Litoral Norte</span></span></a><br />
          <a href="eventos.php?y=3"><img src="images/star.png" width="25" height="25" /> <span class="style49"><span class="style45">  São José dos Campos</span></span></a><br />
          <a href="eventos.php?y=4"><img src="images/star.png" width="25" height="25" /> <span class="style49"><span class="style45"> Taubaté</span></span></a><br />
          <a href="eventos.php?y=5"><img src="images/star.png" width="25" height="25" /> <span class="style49"><span class="style45"> Outros</span></span></a><br />       
	   <a href="eventos.php?z=0"><img src="images/star.png" width="25" height="25" /> <span class="style49"><span class="style45">  Mostrar Todos</span></span></a></p>
		  
          <p class="style50"></p>
		</td>
        <td width="720"><div align="center">
          <?PHP
		  include("./consulta_eventos.php");
		  ?>
        </div></td>
      </tr>
    </table></td>
  </tr>
  <tr bgcolor="#F5F5F5">
    <td><div align="center">
      <table width="990" border="0">
        <tr>
          <td width="474"><div align="center" class="style14"><span class="style35"><a href="index.php">Home</a>  <span class="style27">__</span><span class="style29"><span class="style36"><span class="style37">|<span class="style46">|</span></span></span><span class="style27">__</span></span> <a href="eventos.php">Eventos</a> <span class="style27">__</span><span class="style29"><span class="style36"><span class="style37">|<span class="style46">|</span></span></span><span class="style27">__</span></span> <a href="estabelecimentos.php">Gastronomia</a> <span class="style27">__</span><span class="style29"><span class="style36"><span class="style37">|<span class="style46">|</span></span></span><span class="style27">__</span></span> <a href="fotos.php">Fotos</a> <span class="style27">__</span><span class="style29"><span class="style36"><span class="style37">|<span class="style46">|</span></span></span><span class="style27">__</span></span> <a href="contato.php">Contato</a></span></div></td>
          <td width="229">&nbsp;</td>
          <td width="273"><div align="center" class="style28"><span class="style32">Design by:</span> <span class="style34">Jonathan Molina&nbsp;&nbsp;<a href="./programacao/index.php"><img src="./cadeado.png" width="20"></a></span></div></td>
        </tr>
      </table>
      </div>      <div align="center"></div></td>
  </tr>
</table>
</body>
</html>
