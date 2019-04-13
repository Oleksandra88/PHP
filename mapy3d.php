<?php 

// Defining a multidimensional array 
$favorites = array( 
	array( 
		"name" => "Dave Punk", 
		"mob" => "5689741523", 
		"email" => "davepunk@gmail.com", 
	), 
	array( 
		"name" => "Monty Smith", 
		"mob" => "2584369721", 
		"email" => "montysmith@gmail.com", 
	), 
	array( 
		"name" => "John Flinch", 
		"mob" => "9875147536", 
		"email" => "johnflinch@gmail.com", 
    ),
    array( 
		"name" => "Władysław Jagiełło", 
		"mob" => "666593658", 
		"email" => "wladekziom@wp.pl", 
	),

); 

// Accessing elements 
echo "Dave Punk email-id is: " . $favorites[0]["email"]. "<br>"; 
echo "John Flinch mobile number is: " . $favorites[1]["mob"]. "<br>"; 
echo "Władysław Jagiełło mobile and mail is: " . $favorites[3]["mob"]. " & " .$favorites[3]["email"]. "<br><br>";


$favorites = array( 
    "Kazimierz" => array( 
        "mob" => "666777888", 
        "email" => "wladekziom@wp.pl", 
    ),
    "Dave Punk" => array( 
        "mob" => "5689741523", 
        "email" => "davepunk@gmail.com", 
    ), 
    "Dave rock" => array( 
        "mob" => "2584369721", 
        "email" => "montysmith@gmail.com", 
    ), 
    "Władysław Jagiełło" => array( 
        "mob" => "666777888", 
        "email" => "wladekziom@wp.pl", 
    ),
    "John Flinch" => array( 
        "mob" => "9875147536", 
        "email" => "johnflinch@gmail.com", 
    ) 
); 
  
// Using for and foreach in nested form 
$keys = array_keys($favorites); 
for($i = 0; $i < count($favorites); $i++) { 
    echo $keys[$i] . "<br>"; 
    foreach($favorites[$keys[$i]] as $key => $value) { 
        echo $key . " : " . $value . "<br>"; 
    } 
    echo "<br>"; 
} 
?> 


