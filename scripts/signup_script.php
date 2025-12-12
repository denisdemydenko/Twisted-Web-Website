<?php
require 'connect.php';

$username = $_POST ['sUsername'];
$firstname =  $_POST ['sFirstname'];
$secondname = $_POST ['sSecondname'];
$email = $_POST ['sEmail'];
$password = $_POST ['sPassword'];


$sql = "INSERT INTO users (Username, FirstName, SecondName, Email, Password) VALUES ('$username','$firstname','$secondname', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "<p style='color: black; font-weight: bold; font-family: Montserrat,sans-serif; font-size: 40px'>Account created successfully!</p>";
} else {
    echo "<p style='color: black; font-weight: bold; font-family: Montserrat,sans-serif; font-size: 40px'>Error" . mysqli_error($conn) . "</p>";
}

mysqli_close($conn);

?>