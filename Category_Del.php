<?php session_start();ob_start();?>
<?php include 'dbconnection.php';?>
<?php include 'PageHeader.php';?>


<?php 

$msg = '';

if (isset($_GET['Category_ID'])) {
    $stmt = $db1->prepare('SELECT * FROM category WHERE Category_ID = ?');
    $stmt->execute([ $_GET['Category_ID'] ]);
    $cat = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$cat) {
        exit('Category doesn\'t exist with that ID!');
    }
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            $stmt = $db1->prepare('DELETE FROM category WHERE Category_ID = ?');
            $stmt->execute([ $_GET['Category_ID'] ]);
            
            $msg = 'You have deleted the category!';
            header('Location: ShowAllAdmin.php?Category_ID=' . $_GET['Category_ID']);
        } else {
            
            header('Location: ViewCategoryLists.php');
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
	<h4 style="font-weight:bold">Delete Category No <?=$cat['Category_ID']?></h4>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete Category No<?=$cat['Category_ID']?>?</p>
    <div class="yesno">
        <a href="Category_Del.php?Category_ID=<?=$cat['Category_ID']?>&confirm=yes">Yes</a>
        <a href="Category_Del.php?Category_ID=<?=$cat['Category_ID']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>
	</body>
</html>
<br><br><br><br><br><br>
<?php include 'PageFooter.php';?>
