<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
   <title>Resultado do Envio</title>
</head>

<body text="#003300" link="#006060" vlink="#006060">
<?

   /*
     Recebendo os dado no formulário, componho o corpo do email
     na variaval $corpo
   */
if($_POST["comentario"]!=''){
   $corpo = "Formulário enviado\n";
   $corpo .= "Nome: \n";
   $corpo .= "Email: \n";
   $corpo .= "Comentários: " . $_POST["comentario"] . "\n";

   $DESTINO = "contato@stardiv.com.br";

   $ASSUNTO = "Contato por e-mail";

   /* A Função mail() do php recebe 3 parametros:
    - E-mail de quem vai receber...
    - Assunto
    - Corpo do email
   */

   @mail($DESTINO, $ASSUNTO ,$corpo);

   echo "<script language='JavaScript'>
 window.alert('Formulário enviado com sucesso!.');
 </script>";
}
else{
   echo "<script language='JavaScript'>
 window.alert('Formulário em branco!.');
 </script>";
}
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";


?>

</body>
</html>


