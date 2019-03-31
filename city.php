<!DOCTYPE html> 
<html> 
<head> 
<title></title> 
</head> 
<body bgcolor="cyan">	 
	<?php
		$name = $_GET['name']; 
		$city = $_GET['city']; 
        if ($name=="look") {
            $image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDuN7f1YONvVzPSSmTp7nNBQGQglSjR6L4Hz37EC8yZIMk_HVhVQ";
        }

        else {
            $image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtSaU3kyph3Lx-fyBTlquc1ZQhwlLCT0-JNo6XLQ8BGuVY0XKY";
        }
        echo "<img src = \"$image\" alt = \"nanilake\" height = \"400\" width= \"500\" /> ";
           
        echo "<h1>This is ".$name." of ".$city."</h1><br>"; 
	?> 
	
</body> 
</html> 
