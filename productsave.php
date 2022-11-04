
<?php

require_once "dbconnect.php";

$cName = $_POST['catname'];
$pName = $_POST['pname'];
$price = $_POST['price'];

$sql = "insert into product (category,name,price) values ('$cName', '$pName', '$price')";
var_dump($res);
$res  = $conn->query($sql);

if($res)
    header('Location: displayproduct.php');
else    
    echo "error happened";
?>