<?php

$servername ="localhost";
$username = "root";
$password= "";
$db = "b5052sw";
try {
    $db1= new PDO("mysql:host=$servername;dbname=$db", $username,$password);
   // echo "database connection success"."<br/>";
    $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch (PDOException $e)

{
   echo "connection unsuccessful".
   $e->getMessage();
}

?>