<?PHP
function Logado($Login, $Senha)
{
include("./conexao.php");
$retorno = 0;
$SQL_verifica = "Select count(*) From usuarios Where Login='$Login' and md5(Senha)='$Senha'";
$Rs_v = mysql_query($SQL_verifica, $conexao);
$Linha_v = mysql_fetch_array($Rs_v);
$Quantidade = $Linha_v[0];
if($Quantidade == 1)
{
$retorno = 1;
}
else
{
$retorno = 0;
}
return $retorno;
}
function Mensagem_Erro()
{
?>
<html>
<head>
<title>Login</title>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=./login.php">
<meta http-equiv="Content-Type" content="text/html; charset=iso-
8859-1">
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table width="50%" border="0" align="center" cellpadding="0"
cellspacing="0" class="Texto">
<tr>
<td valign="top" align="center">
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
alert ("Usuário não logado no sistema!");
</SCRIPT>
</td>
</tr>
</table>
</BODY>
</HTML>
<?PHP
}
?>