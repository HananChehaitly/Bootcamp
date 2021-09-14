<?php
    include("connection.php");
    session_start();
    if (isset($_POST["email"]) && $_POST["email"] != ""){
        $email = $_POST["email"];
    }else{
        die("Try harder");
    }
    if (isset($_POST["password"]) && $_POST["password"] != ""){
        $password = hash('sha256', $_POST['password']);
    }
 
    $x = $connection -> prepare ("SELECT * FROM clients WHERE email = ? and password = ?");
    $x -> bind_param ("ss", $email, $password);
    $x -> execute();

    $result = $x ->get_result();
    $row = $result ->fetch_assoc();
    if (!empty($row)){
        $_SESSION["client_id"] = $row["id"];
        $_SESSION["first_name"] = $row["first_name"];
        $_SESSION["last_name"] = $row["last_name"];
        header("Location: clienthome.php");

    }else{
        die("Trying");
        header("Location:clientlogin.php");
    } 

?>