
<?PHP
include("./conexao.php");
include("./util.php");
$Nome = $_COOKIE['Nome'];
$Login = $_COOKIE['Login'];
$Senha = $_COOKIE['Senha'];
if(Logado($Login, $Senha) == "1")
{
include "sql.php";
if(isset($_POST['done'])){

    $id = $_POST['id']; 

    $evento = $_POST['evento'];

    $devento = $_POST['devento'];
    
	$mevento = $_POST['mevento'];
    
	$aevento = $_POST['aevento'];

	$autor = $_POST['autor'];

    $hora = $_POST['hora'];	 
	
	$minuto = $_POST['minuto'];

	$local = $_POST['local'];   

    $conteudo = $_POST['desc'];

       $sql = mysql_query("UPDATE promocao SET evento='$evento', devento='$devento', mevento='$mevento', aevento='$aevento', hora='$hora',minuto='$minuto', local='$local', conteudo='$conteudo' WHERE id='$id'")or die(mysql_error());

            if($sql){

                $erro = "Dados alterados com sucesso!";

              } else{

                  $erro = "Não foi possivel alterar os dados";

              }
}

$id = $_GET['id'];

$sql = mysql_query("SELECT * FROM promocao WHERE id = '$id'");

$evento = @mysql_result($sql, 0, "evento");

$devento = @mysql_result($sql, 0, "devento");

$mevento = @mysql_result($sql, 0, "mevento");

$aevento = @mysql_result($sql, 0, "aevento");

$hora = @mysql_result($sql, 0, "hora");

$minuto = @mysql_result($sql, 0, "minuto");

$local = @mysql_result($sql, 0, "local");

$desc = @mysql_result($sql, 0, "conteudo");

$id = @mysql_result($sql, 0, "id");



?>


<head>
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
</style>

</head>


<form name="form1" action="atualagenda_promocao.php" method="POST" style="padding-top:40px;">

<?php

if(isset($erro)){

     print '<div style="width:91%; background:#ff6600; color:#fff; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';
}

?>



<table width="900" border="0" bordercolor="#FFFFFF" align="center" bgcolor="#000000"> 
  <tr> 
    <td height="200" colspan="2" valign="middle"><img src="images/LOGO.png" /></td> 

  </tr>

<tr>

<td colspan="4"><div align="center"><b>.:: Atualizar promocao ::.</b></td>

</tr>

</thead>

<tbody>

<tr>

<td width="20%">Evento:</td>

<td><input type="text" name="evento" value="<?php echo $evento; ?>" class="campo" /></td>

</tr>

<tr>

<td>Data Evento:</td>

<td>
<input name='devento' type='text' size='2' value="<?php echo $devento;?>">
<b>/</b>
<input name='mevento' type='text' size='2' value="<?php echo $mevento;?>">
<b>/</b>
<input name='aevento' type='text' size='4' value="<?php echo $aevento;?>">
</td>
</tr>



<tr>

  <td>Hora:</td>
  <td><input name="hora" type="text" size='2' value="<?php echo $hora; ?>" maxlength='2'> <b>:</b>
  <input name="minuto" type="text" size='2' value='<?php echo $minuto; ?>' maxlength='2'></td>



</tr>

<tr>

<td>Local:</td>

<td><input name="local" type="text" class="campo" id="local" value="<?php echo $local; ?>"></td>

</tr>

<tr>

<td valign="top">Descricão:</td>

<td><textarea name="desc" rows="8" class="campo">
<?php echo $desc; ?>
</textarea></td>

</tr>


<tr>

<td></td>

<td><input type="submit" value="Atualizar promocao" />

  <input type="button" name="button" id="button" onclick="javascript:location.href='listagenda_promocao.php';" value="Cancelar" />

  <input type="hidden" name="done" value="" /><input name="id" type="hidden" value="<?php echo $id; ?>" /></td>

</tr>

</tbody>
  <tr height=220><td>
  		<td>
		  <a href="painelcontrole.php"><div align="center"><img src="voltar.jpg"><br />voltar</div></a>
		</td> 
  </td></tr>
</table>
</font>
</form>

</body>

</html>
<?PHP
}
else
{
Mensagem_Erro();
}
?>