<?php
require ("db.php");

$dbh = connectDatabase ();

if (!$dbh) {
die ("no connection" . mysqli_error ());
}

if(!mysqli_select_db ($dbh, "phonebook")){
    mysqli_close($dbh);
    die ("can not select" .  mysqli_error ());
}

$sql_stmt = "SELECT * FROM phonebook";
$result = mysqli_query ($dbh, $sql_stmt);

if (!$result){
    mysqli_close($dbh);
    die ("unable to execute query");
}

 $rows = mysqli_num_rows ($result);
 
 if ($rows) {
while ($row = mysqli_fetch_array ($result)) {
    echo 'ID: ' . $row['id'] . '<br>';
    echo 'name: ' . $row['name'] . '<br>';
}

 }
mysqli_close($dbh);

?>