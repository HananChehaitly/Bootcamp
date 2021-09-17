<?php
session_start();  //we need session for user id 
include "connection.php";
$user_id = $_SESSION["user_id"];
$date = $_GET["date"];
$d = strtotime($date);
$date = date('Y-m-d',$d);
$amount = (int) $_GET["amount"];
$categoryId = (int) $_GET["categoryId"];

$query ="Insert into expenses (users_id,date,amount,category_id) Values ($user_id,$date,$amount,$categoryId)";
$stmt = $connection->prepare($query);

//must switch category to category_id
//$stmt->bind_param("isii",$id,$date,$amount,$categoryId);
$stmt->execute();

$query2 ="Select date,amount,category_id from expenses where users_id= $user_id and date= $date and amount = $amount and category_id = $categoryId";
$stmt2 = $connection->prepare($query2);
$stmt2->execute();
$result2 = $stmt2->get_result();
$row2 = $result2->fetch_assoc();

    $query3 ="Select name from categories where id = $categoryId";
    $stmt3 = $connection->prepare($query3);
    $stmt3->execute();
    $result3 = $stmt3->get_result();
    $row3 = $result3->fetch_assoc();
// So that on displayed table i have name not id .. 
    $row2["category_id"]=$row3["name"];

$json = json_encode($row2, JSON_PRETTY_PRINT);
echo $json;

