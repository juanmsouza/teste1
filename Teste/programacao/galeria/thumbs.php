<?php

include_once('thumbnail.inc.php');
$thumb += " ";
$thumb = new Thumbnail($_GET['img']);
$thumb->resize(100,100);
$thumb->show();
exit;
?>