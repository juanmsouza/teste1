<?PHP
include("./conexao.php");
$Operacao = $_POST['operacao'];
if(!isset($Operacao) )
{
$Operacao = "Tela";
}
if($Operacao == "Login")
{
$Login = $_POST['Login'];
$Senha = $_POST['Senha'];
$SQL_Consulta = "Select Id_usuarios, Nome, Senha from usuarios where Login='$Login'";
$Resultado = mysql_query($SQL_Consulta, $conexao);
$cont = 0;
while($Linha = mysql_fetch_object($Resultado))
{
$Id_usuarios = $Linha->Id_usuarios;
$Nome_Completo = $Linha->Nome;
$Senha_pessoal = $Linha->Senha;
$cont++;
}//fecha o while
if($cont == 1)
{
if($Senha == $Senha_pessoal)
{
$SQL_Consulta = "Update usuarios set Ultimo_acesso = NOW() where
Id_usuarios='$Id_usuarios'";
$Resultado = mysql_query($SQL_Consulta, $conexao);
setcookie("Nome_usuario",$Nome,time()+3600);
setcookie("Login",$Login,time()+3600);
setcookie("Senha",md5($Senha),time()+3600);
Header("Location: ./painelcontrole.php");
}
if($Senha != $Senha_pessoal or $Senha =='')
{
print '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
alert ("Usuário ou Senha incorreta - Tente novamente!");
</SCRIPT>';

$Operacao = "Tela";
}
}
else
{
echo "<script>alert('Usuário ou Senha incorreta - Tente
novamente!')</script>";
$Operacao = "Tela";
}
}
if($Operacao == "Tela")
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Pesquisa Online</title>
<meta name="resource-type" content="document">
<meta http-equiv="pragma" content="no-cache">
<meta name="revisit-after" content="1">
<meta name="description" content="Pesquisa realizada na Internet">
<meta name="keywords" content="Pesquisa, Formulário em PHP">
<meta name="robots" content="ALL">
<meta name="distribution" content="Global">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
<body>
<form action="login.php" method="POST">

<br />
<table width="900" height="500" border="0" align="center" bgcolor="#000000"> 
  <tr> 
    <td height="200" valign="middle"><img src="images/LOGO.png" /></td> 

  </tr>
  <tr height="50">
  </tr>
  <tr>
  <td colspan="3"><div align="center"><b><font color="#fffff">.:: LOGIN ::.</font></b></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
  <tr>
<td width="40%" align="right"><font color="#fffff">Login</font></td>
<td width="60%">
<input name="Login" type="text" size="20" maxlength="20"
value=""/>
<input type="hidden" name="operacao" value="Login">
</td>
</tr>
<tr>
<td align="right"><font color="#fffff">Senha</font></td>
<td> <input name="Senha" type="password" size="20"
maxlength="15" value="" />
</td>
</tr>
<tr>
<td colspan="2"><label>
<div align="center"> <br />
<input type="submit" name="Enviar" value="Login" />
</div></label></td>
</tr>
<tr>
<td colspan="2">
<div align="center">
<br /><br />
<a href="../index.php"><div align="center"><img src="voltar.jpg"><br />voltar</div></a>
</div>
</td>
</tr>
<tr height="100">
<td></td>
</tr>
</table>
</form>
</body>
</html>
<?PHP
}
?>