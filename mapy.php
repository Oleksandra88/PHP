<?php 

// One way to create an associative array 
$name_one = array("Kazimierz" => "Dobrawa","Zack"=>"Zara", "Anthony"=>"Any", 
				"Ram"=>"Rani", "Salim"=>"Sara", 
				"Raghav"=>"Ravina"); 

// Second way to create an associative array 
$name_two["kazimierz"] = "dobrawa";
$name_two["zack"] = "zara"; 
$name_two["anthony"] = "any"; 
$name_two["ram"] = "rani"; 
$name_two["salim"] = "sara"; 
$name_two["raghav"] = "ravina"; 

// Accessing the elements directly 
echo "Accessing the elements directly:<br>"; 
echo $name_two["kazimierz"], "<br>";
echo $name_two["zack"], "<br>"; 
echo $name_two["salim"], "<br>"; 
echo $name_two["anthony"], "<br>"; 
echo $name_one["Ram"], "<br>"; 
echo $name_one["Raghav"], "<br>"; 


$round = count($name_one);
echo "<br> jest $round elementów w pierwszej liście <br>";
 
foreach ($name_one as $val => $val_value){ 
    echo "Husband is ".$val." and Wife is ".$val_value."<br>"; 
} 




?> 
