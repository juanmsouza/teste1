<?PHP
  
   $tamanho = $_POST['qtd'];
      
   for($i=0;$i<$tamanho;$i++)
   {
		if($logo !="")
		{
		   echo "$foto[$i] Exclu�do com sucesso!<br>";
		   unlink("./foto/$logo");
	  

		 }
		
   
   }
?>
  