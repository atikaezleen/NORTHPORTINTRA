<?php
   
	
 $db = pg_connect("host=localhost dbname=db_intra user=postgres password=abc123");

   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "";
   }

  
   pg_close($db);
?>
