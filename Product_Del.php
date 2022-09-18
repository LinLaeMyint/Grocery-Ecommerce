<?php session_start();
ob_start();
?>
<?php include 'dbconnection.php';?>
<?php include 'PageHeader.php';?>


<?php 
$msg = '';

if (isset($_GET['id'])) {
    $stmt = $db1->prepare('SELECT * FROM product WHERE id = ?');
    $stmt->execute([ $_GET['id'] ]);
    $pro = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$pro) {
        exit('Product doesn\'t exist with that ID!');
    }
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            $stmt = $db1->prepare('DELETE FROM product WHERE id = ?');
            $stmt->execute([ $_GET['id'] ]);
            

            header('Location: ShowAllAdmin.php?id=' . $_GET['id']);
        } else {
            header('Location: ViewProductLists.php');

        }
    }//end if
} else {
    exit('No ID specified!');
}
?>

<html>
    <head>
    	 <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
        $(document).ready(function(){
        $.ajax({
          url: 'Product_Del.php',
          success: function(data) {
           
        //      location.reload();
            	e.preventDefault();
          }
        });
        });
        </script>
    </head>
    <style>
  .yesno {
      display: flex;
}
 .yesno a {
      display: inline-block;
      text-decoration: none;
      background-color: black;
      font-weight: bold;
      color: white;
      padding: 10px 15px;
      margin: 15px 10px 15px 0;
      border-radius: 5px;
}

  body {
background-image: url(image/snowbg4.gif);
}
    </style>
	<body>
	<br>
	
	
	
	<div class="container">
	<h4 style="font-weight:bold">Delete Product No <?=$pro['id']?></h4>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete Product No<?=$pro['id']?>?</p>
    <div class="yesno">
        <a href="Product_Del.php?id=<?=$pro['id']?>&confirm=yes">Yes</a>
        <a href="Product_Del.php?id=<?=$pro['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>
	</body>
</html>
<br><br><br><br><br><br>
<?php include 'PageFooter.php';?>

