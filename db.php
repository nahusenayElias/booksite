<?php 

$host = "db";
$user = "root";
$password = "lionPass";
$db = "booksite";


$conn =  new mysqli($host, $user, $password, $db);

if(!$conn) {
    die (mysqli_error($conn));

 //} else {
   //  echo 'DB connected!';
}

?>