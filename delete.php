<?php
require("./connect.php");

$deleteData = $_POST['id'];
// echo $deleteData;


$sql = "delete from contacts where id = {$deleteData}";
mysqli_query($conn, $sql);
header("Location: /");

?>