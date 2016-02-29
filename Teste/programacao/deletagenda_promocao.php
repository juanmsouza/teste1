<?php

include "sql.php";

$id = $_GET['id'];

$sql = mysql_query("SELECT * FROM promocao WHERE id = '$id'");

$linha = mysql_num_rows($sql);



$sql = mysql_query("DELETE FROM promocao WHERE id = '$id'");





if($sql){

    header("location:listagenda_promocao.php");

}else{

    print "Não foi possivel deletar o redado. Tente mais tarde!";

}





?>