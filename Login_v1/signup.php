<?php
include("connection.php");


if (isset($_POST["email"]) && $_POST["email"]!=""){
    #FIRST: we will check if email is already taken so:
$username= $_POST["email"];  
$stmt= $connection->prepare("select id from users where username=?");
$stmt->bind_param("s",$username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
if (!is_null($row)){  #if it's NOT null then there is someone with that username so we redirect him to signup.
    header("Location: signup.html");
}
else { #otherwise we should hash his password and add all 4 informations to the data base.
    $password = md5($_POST["pass"]);
    $gender= $_POST["gender"];
    $first_name =$_POST["first_name"];
    $stmt1= $connection->prepare("Insert into users (username, password,gender,first_name) VALUES (?,?,?,?)");
    $stmt1->bind_param("ssss",$username,$password,$gender,$first_name);
    $stmt1->execute();
  
  #Now we redirect him to login page.
    header("Location: index.html");
}
$connection->close();
}
?>