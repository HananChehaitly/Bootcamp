
<?php
session_start();
session_unset();
include "connection.php";

if(isset($_POST["store_name"]) && $_POST["store_name"] != "" && strlen($_POST["store_name"]) >= 3 ) {
    $store_name = $_POST["store_name"];
}else{
    session_start();
    $_SESSION["store_name"] ="Please enter a valid store name.";
    header('location: store_registerpage.php');
    exit();   // I am using exit function to stop script execution, otherwise the email might actually get added if it meets the other requirements.
}


if(isset($_POST["email"]) && $_POST["email"] != "") {
    $email = $_POST["email"];
}else{
    session_start();
    $_SESSION["mail"] ="Please enter a valid email address." ;
    header('location: store_registerpage.php');
    exit();
}

if(isset($_POST["landline"]) && $_POST["landline"] != "" ) {
    $phone = $_POST["landline"];
}else{
    session_start();
    $_SESSION["landline"]= "Please enter a valid landline." ;
    header('location: store_registerpage.php');
    exit();
}

if(isset($_POST["password"]) && $_POST["password"] != "" && strlen($_POST["password"]) >=8 ) {
    $password = $_POST["password"];
}else{
    session_start();
    $_SESSION["password"]="Please enter a valid password." ;
    header('location: store_registerpage.php');
    exit();
}
if(strlen($_POST["password"]) <8 ) {
    session_start();
    $_SESSION["passwordlen"]=" Your Password is too short." ;
    header('location: store_registerpage.php');
    exit();
}

if($_POST["password"] != $_POST["confirmPassword"]){ //checking if they are different
    session_start();
    $_SESSION["password"]="Your passwords do not match." ;
    header('location: store_registerpage.php');
    exit();
}

//Since category is a foreign key in stores, we have to know the category id for the input category.
$sql3="Select id from categories where name=?"; 
$stmt3 = $connection->prepare($sql3);
$stmt3->bind_param("s",$_POST['category']);
$stmt3->execute();
$result3 = $stmt3->get_result();
$row3 = $result3->fetch_assoc();
if(empty($row3)){
    session_start();
    $_SESSION["category"]="We do not feature this category." ;
    header('location: store_registerpage.php');
    exit();
}

else{

$category = $row3["id"];

$sql1="Select * from stores where email=?"; #Check if the email already exists in the database
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("s",$email);
$stmt1->execute();
$result = $stmt1->get_result();
$row = $result->fetch_assoc();

if(empty($row)){  //row is the retrieved mail from database.
$sql2 = "INSERT INTO `stores` (`name`,  `landline`, `email`, `password`,`category_id`) VALUES (?, ?, ?, ?,?);"; #add the new user to the database
$hash =hash('sha256', $password);
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("ssssi",$store_name,$phone,$email,$hash,$category);
$stmt2->execute();
$result2 = $stmt2->get_result();

header('location: storelogin.php');

}
else{
    session_start();
    $_SESSION["flash"]="This email is already taken!" ;
    header('location: store_registerpage.php');
   
}
}
?>
