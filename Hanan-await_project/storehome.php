
<?php
 session_start(); 
 include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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

  <style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
  margin-left:-5px;
  margin-right:-5px;
}

.column {
  flex: 50%;
  padding: 5px;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

th {
  background-color: #f2f2f2;
}

</style>

</head>

<body onload="getData()">


<section class="top-header">
	<div class="container">
		<div class="row">
			
			<div class="col-md-4 col-xs-12 col-sm-4">
				
				<div class="logo text-center">
					<a href="index.html">
						
						<svg width="250px" height="29px" viewBox="0 0 250 35" version="1.1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="35"
								font-family="AustinBold, Austin" font-weight="bold">
								<g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
									<text id="AVIATO">
										<tspan x="108.94" y="325">
 Welcome
										</tspan>
									</text>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
	
</section>


<button type="button" aria-expanded="false" aria-controls="navbar" id="overnight"> 
Add new expense				
</button>


<div class="row">
  <div class="column">
    <table id="expenses">
      <tr>
        <th>Date</th>
        <th>Amount</th>
        <th>Category</th>
      </tr>
	  <!-- now loop while there are expenses rows -->
    
    </table>
  </div>
  <div class="column">
    <table id="add">
      <tr>
        <th>ADD NEW EXPENSE</th>
      </tr>
	  <!-- Put form here -->
      <tr>
	  <form >
					
			  			<tr>
									<td>	<input name ="name" placeholder="Date"  class="form-control" id="date">
									</td>
						</tr>
						<tr>
  									<td> <input name ="des" placeholder="Amount"  class="form-control" id="amount">
									</td>
						</tr>
						<tr>
  									<td> <input name ="price" placeholder="Category"  class="form-control"  id="categoryId">	  
									</td>
						</tr>
						<tr>
  						 <td> <input type ="button"  placeholder="submit" class="form-control" id="submit"> 
						
						</td>
						</tr>
				
					    
        </form> 
      </tr>
     
    </table>
  </div>
</div>




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
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
			async function Display(){
				 const response = await fetch('http://localhost/await_project/backend_storehome.php');
				 if (!response.ok){
					 const message = "An error occured";
					 throw new Error(message);
				 }
				 const results = await response.json();  
				 return results;
			}

		function getData(){
			Display().then(results => {
			//should loop over result and create td elements	
			for(var i=0; i<results.length; i++){
				var row = $('<tr><td>'+ results[i].date + '</td><td>'+ results[i].amount +'</td><td>'+ results[i].category_id+ '</td></tr>');
				$('#expenses').append(row);
			}
			}).catch(error => {
				console.log(error.message);
			})
			$('#add').hide();
		}
		$("#overnight").click(unhide);
		function unhide(){
		$('#add').show();
		}
		async function Send(){
				 //var date = $("#date").val();
				 //var amount = $("#amount").val(); 
				 //var categoryId =  $("categoryId").val();

				var url = new URL("http://localhost/await_project/Add.php");
   				params = {date: $("#date").val(), amount:$("#amount").val(), categoryId :  $("#categoryId").val()};
				console.log(params);
				Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));
				const response1  = await fetch(url);

				//const response = await fetch('http://localhost/await_project/Add.php?date='+date+'&amount='+amount+'&category_id='+categoryId);
				
				 const results1 = await response1.json();  
				 return results1;
			}
		$("#submit").click(Add);
		function Add(){
			Send().then(results1 =>{
				var row = $('<tr><td>'+ results1.date + '</td><td>'+results1.amount +'</td><td>'+ results1.category_id + '</td></tr>');
				$('#expenses').append(row);
			})
		}

		
	</script>

  </body>
  </html>
