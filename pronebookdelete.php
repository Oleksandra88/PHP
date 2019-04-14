<?php
require ("db.php");

$dbh = connectDatabase ();
$id = $_GET ["id"];

if (!$dbh) {
    die ("no connection" . mysqli_error ());
    }
    
    if(!mysqli_select_db ($dbh, "phonebook")){
        mysqli_close($dbh);
        die ("can not select" .  mysqli_error ());
    }
    
    $sql_stmt = "DELETE FROM phonebook where id = $id";
    $result = mysqli_query ($dbh, $sql_stmt);
    
    if (!$result){
        mysqli_close($dbh);
        die ("unable to execute query");
    }
   
    mysqli_close($dbh); 

?>
