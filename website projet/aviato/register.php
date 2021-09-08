


<?php
session_start();
session_unset();
include "connection.php";

if(isset($_POST["first_name"]) && $_POST["first_name"] != "" && strlen($_POST["first_name"]) >= 3 ) {
    $first_name = $_POST["first_name"];
}else{
    session_start();
    $_SESSION["fn"] ="Please enter a valid first name.";
    header('location: registerpage.php');
}

if(isset($_POST["last_name"]) && $_POST["last_name"] != "" && strlen($_POST["last_name"]) >= 3) {
    $last_name = $_POST["last_name"];
}else{
    session_start();
    $_SESSION["ln"]  ="Please enter a valid last name.";
    header('location: registerpage.php');
}

if(isset($_POST["email"]) && $_POST["email"] != "") {
    $email = $_POST["email"];
}else{
    session_start();
    $_SESSION["mail"] ="Please enter a valid email address." ;
    header('location: registerpage.php');
}

if(isset($_POST["mobile"]) && $_POST["mobile"] != "" ) {
    $phone = $_POST["mobile"];
}else{
    session_start();
    $_SESSION["mobile"]= "Please enter a valid mobile number." ;
    header('location: registerpage.php');
}

if(isset($_POST["password"]) && $_POST["password"] != "" && strlen($_POST["password"]) >=8 ) {
    $password = $_POST["password"];
}else{
    session_start();
    $_SESSION["password"]="Please enter a valid password." ;
    header('location: registerpage.php');
}
if(strlen($_POST["password"]) <8 ) {
    session_start();
    $_SESSION["passwordlen"]=" Your Password is too short." ;
    header('location: registerpage.php');
}

if($_POST["password"] != $_POST["confirmPassword"]){ //checking if they are different
    session_start();
    $_SESSION["password"]="Your passwords do not match." ;
    header('location: registerpage.php');
}
else{
$sql1="Select * from clients where email=?"; #Check if the email already exists in the database
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("s",$email);
$stmt1->execute();
$result = $stmt1->get_result();
$row = $result->fetch_assoc();
if(empty($row)){
$sql2 = "INSERT INTO `clients` (`first_name`, `last_name`, `phone_number`, `email`, `password`) VALUES (?, ?, ?, ?, ?);"; #add the new user to the database
$hash = hash('sha256', $password);
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("sssss",$first_name,$last_name,$phone,$email,$hash);
$stmt2->execute();
$result2 = $stmt2->get_result();

header('location: clientlogin.php');
}
else{
    session_start();
    $_SESSION["flash"]="This email is already taken!" ;
    header('location: registerpage.php');
}
}
?>