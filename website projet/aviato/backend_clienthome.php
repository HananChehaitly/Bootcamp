<?php  
session_start();

//Make necessary changes in db from purchase.
//So I add row pivot table.
query3 = "INSERT INTO `items_boughtby_clients` (`client_id`, `item_id`) VALUES (?, ?);"; 
//rember we have $_session["client_id"] since the user logged in.
$stmt3 = $connection->prepare($query3);
$client =  $_session["client_id"];
$stmt3->bind_param("ii",$client, $_POST["product"]);
$stmt3->execute();

//Now I need to set Session["product"] = product id which is $_POST["product"]
//Because we will need session to display a message to the user on home page that the purchase was successful
$_SESSION["product"] = $_POST["product"];

?>