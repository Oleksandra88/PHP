<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Moja pierwsza strona PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1> <?php 
echo "Hello,This is a display string example!"; 
?> </h1>  
<h2><?php 
echo "Multiple ","argument ","string!"; 
?> </h2>
<?php 
$text = "Hello, World!"; 
$num1 = 20; 
$num2 = 20; 
echo $text."\n"; 
echo $num1."+".$num2."="; 
echo $num1 + $num2; 
?> 
<p>
<?php 
print "Hello, world!"; 
?> 
</p>

<p>
<?php 
$name = "Krishna"; 
echo "The name of the Geek is $name \n"; 
?>
<br>
<?php
$name = "Krishna"; 
echo 'The name of the geek is $name'; 
?> 


</p>


</body>
</html>


