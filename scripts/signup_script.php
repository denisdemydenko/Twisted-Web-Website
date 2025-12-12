require 'connect,php';

$username = $_POST ['sUsername'];
$firstname =  $_POST ['sFirstname'];
$secondname = $_POST ['sSecondname'];
$email = $_POST ['sEmail'];
$password = $_POST ['sPassword'];


$sql = "INSERT INTO users (Username, FirstName, SecondName, Email, Passoword) VALUES ('$username','firstname','$secondname', '$email', '$password')";