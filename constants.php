<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php 

// pass by value 
function valGeek($num) { 
	$num += 2; 
	return $num; 
} 

// pass by reference 
function refGeek(&$num) { 
	$num += 10; 
	return $num; 
} 

$n = 10; 

valGeek($n); 
echo "The original value is still $n \n"; 

refGeek($n); 
echo "The original value changes to $n"; 

?> 





</body>
</html>

