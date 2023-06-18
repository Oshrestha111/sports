<?php 

$conn = mysqli_connect("localhost", "root", "", "sign");
$id = $_GET['id'];
$q = "DELETE FROM users WHERE id ='$id'";
$qu = mysqli_query($conn, $q);
header("location:table.php");
?>