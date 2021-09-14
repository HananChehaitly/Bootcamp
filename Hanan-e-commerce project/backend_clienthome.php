<?php  
session_start();
include "connection.php";
//Make necessary changes in db from purchase.
//So I add row pivot table.
//rember we have $_session["client_id"] since the user logged in.
$client =  $_SESSION["client_id"];
$item = $_GET["item"];
//$item = $_POST["product"];
$query3 = "INSERT INTO `items_boughtby_clients` (`client_id`, `item_id`) VALUES (?, ?)"; 
$stmt3 = $connection->prepare($query3);
$stmt3->bind_param("ii",$client,$item);
$stmt3->execute();
echo "You purchased this item ";
//Now I need to set Session["product"] = product id which is $_POST["product"]
//Because we will need session to display a message to the user on home page that the purchase was successful

?>