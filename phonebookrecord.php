<!DOCTYPE html> 
<html> 
<body> 

<?php
require ("db.php");
if (isset($_POST["submitform"])){

    $nm=$_POST['name']; 
    $email=$_POST['email']; 
    $mobile=$_POST['mobile']; 
    $id=$_POST['id']; 
    $dbh = connectDatabase (); 
    
    if (!$dbh) {
        die("Unable to connect: " . mysqli_error()); 
    }
    
    if (!mysqli_select_db ($dbh,"phonebook")) {
      mysqli_close($dbh);     
    die("Unable to select database: " . mysql_error());    
    }
   
    $sql_stmt = "UPDATE `phonebook` SET  `name` = '$nm', `email` = '$email', `mobile` = '$mobile' where `id` = '$id'"; 
    $result = mysqli_query($dbh,$sql_stmt); 
    
    if (!$result) {
        mysqli_close($dbh);   
        die("Adding record failed: " . mysqli_error());    
    } 

    mysqli_close($dbh);

    header('Location: ' . '/teb/phonebookrecord.php?id= '. $id);
} 
else {

    $dbh = connectDatabase ();
    $id = $_GET ["id"];

    if (!$dbh) {
        die ("no connection" . mysqli_error ());
        }
        
        if(!mysqli_select_db ($dbh, "phonebook")){
            mysqli_close($dbh);
            die ("can not select" .  mysqli_error ());
        }
        
        $sql_stmt = "SELECT * FROM phonebook where id = $id";
        $result = mysqli_query ($dbh, $sql_stmt);
        
        if (!$result){
            mysqli_close($dbh);
            die ("unable to execute query");
        }
        
        $rows = mysqli_num_rows ($result);
        
    if ($rows) {
            $row = mysqli_fetch_array ($result);
            echo 'ID: ' . $row['id'] . '<br>';
            echo 'name: ' . $row['name'] . '<br>';
            echo 'email: ' . $row['email'] . '<br>';
            echo 'mobile: ' . $row['mobile'] . '<br>';
    
            ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
        <input name="id" hidden type="text" value="<?php echo $row['id'];?>"><br>
        <label for="name">Please enter your name: </label> 
        <input name="name" type="text" value="<?php echo $row['name'];?>"><br> 
        <label for="email">Please enter your email: </label> 
        <input name="email" type="text" value="<?php echo $row['email'];?>"><br> 
        <label for="mobile">Please enter your mobile phone: </label> 
        <input name="mobile" type="text" value="<?php echo $row['mobile'];?>"><br>
        <input type="submit" value="Submit" name="submitform"> 

        </form> 


    <?php
    
        }

    
        
        mysqli_close($dbh); 
}
?>

</body> 
</html> 