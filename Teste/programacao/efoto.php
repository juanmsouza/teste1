<?PHP
  
   $tamanho = $_POST['qtd'];
      
   for($i=0;$i<$tamanho;$i++)
   {
		if($logo !="")
		{
		   echo "$foto[$i] Excluído com sucesso!<br>";
		   unlink("./foto/$logo");
	  

		 }
		
   
   }
?>
  