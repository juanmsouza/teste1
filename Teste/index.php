<?
include("consulta2.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1"> 
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
.style47 {
	color: #CCCCCC;
	font-size: 36px;
}
.style48 {color: #CCCCCC}
.style50 {
	font-size: 24px;
	color: #CCCCCC;
	font-weight: bold;
}
.style51 {font-size: 14px; color: #CCCCCC; font-weight: bold; }
-->
</style></head>

<body>
<table width="700" border="0" align="center" bgcolor="#000000">
  <tr>
    <td height="260"><table width="700" border="0" align="center">
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
      <td height="30" bgcolor="#F5F5F5"><span class="style19"><span class="style27">__</span> <span class="style45"><a href="index.php">Home</a> <span class="style27">_<span class="style44">|</span>_</span></span> <span class="style45"><a href="eventos.php">Eventos</a></span><span class="style45"> <span class="style27">_<span class="style44">|</span>_</span> <a href="estabelecimentos.php">Gastronomia</a></span><span class="style45"> <span class="style27">_<span class="style44">|</span>_</span></span> <span class="style45"><a href="eventos.php"></a></span><span class="style45"><a href="./programacao/galeria/fotos.php">Fotos</a></span><span class="style45"> <span class="style27">_<span class="style44">|</span>_</span></span> <span class="style45"><a href="eventos.php"></a></span><span class="style45"><a href="contato.php">Contato</a></span></span></td>
   </tr>
  <tr>
    <td height="400" class="style16"><table width="700" border="0" align="right">
      <tr>
        <td width="220"><br />
          _<img src="images/star.png" width="25" height="25" /> <span class="style50">Agenda</span></td>
        <td rowspan="2" align="right" valign="top"><br />
          <table width="300" border="0" align="right">
          <tr>
            <td valign="top"><?echo $c;?></td>
          </tr>
          <tr>
            <td valign="top"><?echo $d;?></td>
          </tr>
          <tr>
            <td valign="top"><?echo $e;?></td>
          </tr>
          <tr>
            <td valign="top"><?echo $f;?></td>
          </tr>
          <tr>
           <td valign="top"><?echo $g;?></td>
          </tr>
		            <tr>
           <td valign="top"><?echo $h;?></td>
          </tr>
        </table></td>
        <td width="250" rowspan="3" valign="top"><p align="right"><br />
          _<img src="images/star.png" width="25" height="25" />_<span class="style50">Promoção da<span class="style37">_</span>          Semana<span class="style37">_</span></span></p>
          <p align="center"><img src="images/barra.png" width="230" height="10" /></p>
          <p><?        include("./programacao/lista_promocao.php");?></p>
         
          <p align="center"><img src="images/barra.png" width="230" height="10" /></p>
          <p align="right"><img src="images/star.png" width="25" height="25" />_<span class="style50">O que esta faltando no  Star<span class="style37">_</span> Divulgações?<span class="style37">_</span></span></p>
          <p align="right">
            <input name="textfield" type="text" id="textfield" value="" size="30" />
            <br />
          </p>
          <form id="form1" name="form1" method="post" action="">
            <div align="right">
              <input type="submit" name="button" id="button" value="OK" />
              <span class="style37">_</span> </div>
          </form>
          </td>
      </tr>
	  	<tr>
		<td height="400" align="right" background="images/b_01.jpg" valign="top">
        <?PHP
        include("./programacao/lista_index.php");
        ?></td>
	</tr>
      <tr>
        <td height="200" valign="top"><br />
            <iframe src='http://selos.climatempo.com.br/selos/MostraSelo.php?CODCIDADE=553,469,566&SKIN=preto' scrolling='no' frameborder='0' width=150 height='170' marginheight='0' marginwidth='0'></iframe></td>
        </tr>
      
    </table></td>
  </tr>
  <tr bgcolor="#F5F5F5">
    <td><div align="center">
      <table width="990" border="0">
        <tr>
  <td width="474"><div align="center" class="style14"><span class="style35"><a href="index.php">Home</a>  <span class="style27">__</span><span class="style29"><span class="style36"><span class="style37">|<span class="style46">|</span></span></span><span class="style27">__</span></span> <a href="eventos.php">Eventos</a><span class="style27">__</span><span class="style29"><span class="style36"><span class="style37">|<span class="style46">|</span></span></span><span class="style27">__</span></span><a href="estabelecimentos.php">Gastronomia</a><span class="style27">__</span><span class="style29"><span class="style36"><span class="style37">|<span class="style46">|</span></span></span><span class="style27">__</span></span><a href="./programacao/galeria/fotos.php">Fotos</a><span class="style27">__</span><span class="style29"><span class="style36"><span class="style37">|<span class="style46">|</span></span></span><span class="style27">__</span></span><a href="contato.php">Contato</a></span></div></td>         <td width="229">&nbsp;</td>
         <td width="273"><div align="center" class="style28"><span class="style32">Design by:</span> <span class="style34">Jonathan Molina&nbsp;&nbsp;<a href="./programacao/index.php"><img src="./cadeado.png" width="20"> </a></span></div></td>
        </tr>
      </table>
      </div>      <div align="center"></div></td>
  </tr>
</table>
</body>
</html>
