<?php session_start();?>
<?php include 'dbconnection.php';?>
<?php include 'H.php';?>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!--     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
</head>
<style>
body {
background-image: url(image/snowbg4.gif);
}

    img:hover {
        transform: scale(1.08);
    }
    img:hover::before {
        left: 10px;
        top: 10px;
    }
    img:hover::after {
        right:  10px;
        bottom:  10px;
    }


</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Our Bio</h1>
				<p>Capital Company Limited is a popular grocery mart in Yangon, Myanmar and sell different types of grocery products.
				Capital has gradually evolved from a single Hypermarket to a multi-format modern retailer offering all the needs of the Myanmar households through wide range of local and import products as well as great promotions and fairs. </p>
			</div>
		
			<div class="col">
				<img class="img-responsive rounded" src="image/ab7.jpg" style="width: 100%;height: 230px;">
			</div>
		
		
		</div>
		<br><br>
		<div class="row">

			<div class="col">
				<img class="img-responsive rounded" src="image/ab9.jpg" style="width: 100%;height: 230px;" >
			</div>
		
			<div class="col">
				<h1>Business Goal</h1>
				<p>Mission of Capital is to serve all customers, whether they are affluent or have low income, by providing the choice through Great Variety of Products and Services as well as offering Great Value and unbeatable price across the country. 
				Capital is committed to improve the quality of life of its customers and communities which is one of the most important pillars of Capital.</p>
			</div>
		
		</div>
		<br><br>
		<div class="row">
			<div class="col">
				<h1>Future Plan</h1>
				<p>Capital will continue grow its store network in the coming years through different formats in major cities and will continue to bring innovative products, services, new retail formats and value for money to the people of Myanmar</p>
				</div>
		
			<div class="col">
				<img class="img-responsive rounded" src="image/ab10.jpg" style="width: 100%;height: 230px;" >
			</div>
		
		
		</div>
		
		
	</div>
</body>
</html>



<br><br>
<?php include 'PageFooter.php';?>

