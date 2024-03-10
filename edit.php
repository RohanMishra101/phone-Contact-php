<?php

require("./connect.php");

$id = $_POST['id'];
// echo '' . $id . '';
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];

$phoneNumber = $_POST['phone'];

// echo $firstName . " " . $lastName . " " . $phoneNumber;

$sql = "UPDATE contacts SET first_name = '$firstName', middle_name = '$middleName', last_name = '$lastName', phone_number = '$phoneNumber' WHERE id = $id";

mysqli_query($conn, $sql);
header("location: /");
?>