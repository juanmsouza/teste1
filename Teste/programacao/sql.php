<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "divulgacao";
$conn = mysql_connect($host, $user, $pass) or die (mysql_error());
@mysql_select_db($db);

?>