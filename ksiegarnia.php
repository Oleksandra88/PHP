<?php
require ("book.php");

$physics = new Book ("hobbit", "tolkien");
echo $physics -> title . " - ";
echo $physics -> author . "<br>";

?>