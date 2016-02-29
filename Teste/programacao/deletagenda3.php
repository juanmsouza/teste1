<?PHP
include("./conexao.php");
include("./util.php");
$Nome = $_COOKIE['Nome'];
$Login = $_COOKIE['Login'];
$Senha = $_COOKIE['Senha'];
if(Logado($Login, $Senha) == "1")
{
include "sql.php";

$id = $_GET['id'];

$sql = "SELECT logo FROM anuncio WHERE id = '$id'";

$resultado = mysql_query($sql);

$linha = mysql_fetch_object($resultado);

$logo = $linha->logo;


       $X = @unlink("./foto/$logo");

	    
		  $sql = mysql_query("DELETE FROM anuncio WHERE id = '$id'"); 
		
		
		  if($sql)
		  {
            header("location:listagenda3.php");

          }
	   	  else
		  {
             print "Não foi possivel deletar o evento. Tente mais tarde!";
          }
	   
    

}
else
{
  Mensagem_Erro();
}
?>