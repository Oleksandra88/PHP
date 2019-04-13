<?php 
class Book { 
    var $title; 
    var $author;
    var $price;

    function setPrice($_price){ 
        $this->price = $_price; 
     }

     function getPrice(){ 
       return $this->price; 
     } 

     function __construct ($_title, $_author){
     $this ->title = $_title;
     $this ->author = $_author;
    }
}

$physics = new Book ("silmarilion", "tolkien");
echo $physics -> title . "<br>";
echo $physics -> author . "<br>";

$maths = new Book ("pl", "tolkien");
echo $maths -> title . "<br>";
echo $maths -> author . "<br>";

// $chemistry = new Book;


?>