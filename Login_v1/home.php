
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<?php

include("connection.php");

if (isset($_POST["email"]) && $_POST["email"]!=""){
$username= $_POST["email"];  
$stmt= $connection->prepare("select id from users where username=?");
$stmt->bind_param("s",$username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
    if (is_null($row)){   #In this case, there's no matching email in our db. The user will be directed to sign up page.
        header("Location: signup.html");
    }
    else {
        $password = md5($_POST["pass"]);
        $stmt1= $connection->prepare("select id from users where username=? and password=?");
        $stmt1->bind_param("ss",$username,$password);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
        $row1 = $result1->fetch_assoc();
        if(!is_null($row1)){  #In case row1 is not null then the user entered the correct password and should be welcomed into "Home.php".
            $stmt2= $connection->prepare("Select gender, first_name from users where id =?");
            $stmt2->bind_param("i",$row1["id"]);
            $stmt2->execute();
            $result2 = $stmt2->get_result();
            $row2 = $result2->fetch_assoc();
     ?>
   
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="home.php"  method="POST">
						
					<span class="login100-form-title">
						
                    <?php
                      if ($row2["gender"]= "female"){
                              echo "Welcome Ms ".$row2["first_name"]; 
                         }
                     else{
                             echo "Welcome Mr. ".$row2["first_name"];
                         }
                }  
                else{ #In case the user entered an INCORRECT password, we redirect him to login again.

                    header("Location: index.html ");
                }
            }
       
    
        }
    ?>



                    
					</span>
	
<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>