<?PHP
include "sql.php";
$id = $_GET['id'];
$resultado = mysql_query($sql);
$linha = mysql_fetch_object($resultado);