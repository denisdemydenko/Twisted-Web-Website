<?php
require 'connect.php';

$firstname = $_POST ['sFirstname'];
$number =  $_POST ['sNumber'];
$date = $_POST ['sDate'];
$time = $_POST ['sTime'];
$email = $_POST ['sEmail'];


$sql = "INSERT INTO bookings (Name, Number, BookingDate, Time, Email) VALUES ('$firstname','$number','$date', '$time', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "<p style='color: black; font-weight: bold; font-family: Montserrat,sans-serif; font-size: 40px'>Booked Successfuly</p>";
} else {
    echo "<p style='color: black; font-weight: bold; font-family: Montserrat,sans-serif; font-size: 40px'>Error" . mysqli_error($conn) . "</p>";
}

mysqli_close($conn);

?>