<?php 
  
  // Php code showing default error handling 
    
  if(!file_exists ("geeks.txt")) {
      die ("file is not present");

  }
  
  else {
     $file = fopen("geeks.txt", "r"); 
  echo $file ;  
  }

  ?> 