<?php  

include "connection.php";

$query4= "INSERT INTO `products` (`name`,`description`,`price`,`store_id`) VALUES (?, ?, ?, ?)"; 
session_start();
$stmt4 = $connection->prepare($query4);
//Remember we saved the store table id when they logged in.
$store= $_SESSION["store_id"];

$stmt4->bind_param("ssii",$_POST["name"],$_POST["des"],$_POST["price"],$store);
$stmt4->execute();

header("Location: storehome.php");

?>