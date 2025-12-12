<?php
// Require the connect file:
require("connect.php");
 
// Get the posted values:
$sEnteredUser = $_POST['sUsername'];
$sEnteredPass = $_POST['sPassword'];
 
$sql = "SELECT * FROM users WHERE users.Username = '$sEnteredUser'";
 
// Run the query:
$result = mysqli_query($conn, $sql);
 
// We need to look to find the password that is stored:
if(mysqli_num_rows($result)==1){
    // We are going to check the password:
    // print_r($result);
 
    // We need to create an associative array:
    $row = mysqli_fetch_assoc($result);
 
    $sStoredPassword = $row['Password'];
 
    // Check the above works using echo, then create an IF which checks if the password that the user entered, matches the password in the database - If it works, echo out "You are logged in");
    if($sEnteredPass == $sStoredPassword){
        echo("You are logged in");
    } else {
        echo("Your password is incorrect");
    }
    
}
 
?>