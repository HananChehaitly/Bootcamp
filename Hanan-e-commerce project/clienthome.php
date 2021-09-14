
<?php
 session_start(); 
 $_session["count"]=0;

 include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

<script src="jquery-3.6.0.min.js"></script>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Aviato | E-commerce template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">


<section class="top-header">
	<div class="container">
		<div class="row">
			
			<div class="col-md-4 col-xs-12 col-sm-4">
				
				<div class="logo text-center">
					<a href="index.html">
						
						<svg width="150px" height="29px" viewBox="0 0 250 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="35"
								font-family="AustinBold, Austin" font-weight="bold">
								<g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
									<text id="AVIATO">
										<tspan x="108.94" y="325">
<?php

$x = $_SESSION["first_name"];
echo "Welcome ".$x;

?>
										</tspan>
									</text>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<ul class="top-menu text-right list-inline">
					<li class="dropdown cart-nav dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-android-cart"></i>Cart</a>
						<div class="dropdown-menu cart-dropdown">
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-1.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div>
						
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-2.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div>

							<div class="cart-summary">
								<span>Total</span>
								<span class="total-price">$1799.00</span>
							</div>
							<ul class="text-center cart-buttons">
								<li><a href="cart.html" class="btn btn-small">View Cart</a></li>
								<li><a href="checkout.html" class="btn btn-small btn-solid-border">Checkout</a></li>
							</ul>
						</div>

					</li>

					
					


				</ul>
			</div>
		</div>
	</div>
</section>
<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

	</nav>
</section>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Shop</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">shop</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="products section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="widget">
	            </div>
				<div class="widget product-category">
					<h4 class="widget-title">Search by Category</h4>
					<div class="panel-group commonAccordion" id="accordion" role="tablist" aria-multiselectable="true">
	
<?php 
$query1 ="Select name from categories";
$stmt1 = $connection->prepare($query1);
$stmt1->execute();
$result1 = $stmt1->get_result(); 

while($row1= $result1->fetch_assoc()){ ?>			  
						<div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingOne">
						      	<h4 class="panel-title">
						        	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
		<!-- I echoed here-->		<div class="dumb">
										<?php	 print($row1["name"]);    
										?>
									</div>
						        	</a>
						      	</h4>
						    </div>
					    <div id="collapseOne"  role="tabpanel" aria-labelledby="headingOne">
							
					    </div>
					  </div>
					  <?php  } ?>
					  
					</div>
				</div>
			</div>

<!-- I will create a hidden inputs where I change the value on click of a category or product -->

<form action= "clienthome.php" method= "POST" id="search">
	<input type ="hidden" id="100" name= "category" value=""> <!-- This one is to know what category we clicked on-->
</form>

<form action= "backend_clienthome.php" method= "POST" id ="purchase">
	<input type ="hidden" id="200" name= "product" value=""> <!-- This one is to know what product we clicked on-->
</form>											<!-- value will be the actual table id of clicked product -->			



<p id="gfg"></p>
<?php
if(!empty($_POST["category"])){ //this value serves as an indicator from JavaScript that the client clicked on a category to view.

$cat = trim($_POST["category"]) ;

$query = "Select p.id, p.name from products as p, categories as c, stores as s where c.name=? and s.category_id =c.id and p.store_id= s.id";
$stmt = $connection->prepare($query);
$stmt->bind_param("s",$cat);
$stmt->execute();
$result = $stmt->get_result();

while($row=$result->fetch_assoc()){
	 ?>
		
					
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						
						<img class="img-responsive" src="images/shop/products/product-1.jpg" alt="product-img" />
						<div class="preview-meta">
							
<!-- Here I gave the purchase button an id equal to actual product's retrieved id id=" echo $row["id"] "-->
								
								<div class="tf-ion-android-cart" id="<?php echo $row["id"] ?>">
								</div>

				</div>
                      	</div>
					
					<div class="product-content">

		<!-- I echoed here-->	
									<?php	 print($row["name"]);    
									?>  
				</div>
					</div>
				
									</div>
		
<?php 

} 
}
?>


<script>
$(".tf-ion-android-cart").click(function(){
var id =$(this).attr("id");
const x = new XMLHttpRequest();
x.onload = function() {
	document.getElementById(id).innerHTML= this.responseText;
	};
	x.open("Get","backend_clienthome.php?item="+id);
	x.send();
});

$(".dumb").on("click",function(){    // I am setting a click event on every category that changes the value of hidden input to the name of category.

$("#100").attr("value",$(this).text());
    $('form#search').submit();
});

//$(".tf-ion-android-cart").on("click", function(){   // I am setting a click event on every purchase icon that changes the value of hidden input to the id of the item.

//$("#200").attr("value",$(this).attr("id"));
	//$('form#purchase').submit();
//});

</script>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/clienthome.js"></script>
    


  </body>
  </html>
