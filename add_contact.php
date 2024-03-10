<?php

require("./connect.php");

$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];

$phoneNumber = $_POST['phone'];


// echo '<pre>';
// var_dump($firstName . ' ' . $middleName . ' ' . $lastName . ' ' . $phoneNumber);
// echo '</pre>';

$sql = "insert into contacts(first_name,middle_name,last_name,phone_number) values ('$firstName','$middleName','$lastName','$phoneNumber')";
mysqli_query($conn, $sql);

header("Location: /");

?>