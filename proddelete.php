<?php

require_once "dbconnect.php";

$catId = $_GET['id'];

$sql = "DELETE FROM product WHERE id= $catId";

$res  = $conn->query($sql);
if($res)
    header('Location: displayproduct.php');
else    
    echo "error happened";