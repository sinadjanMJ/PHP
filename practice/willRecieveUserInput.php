<?php

        require_once "dbconnect.php";

        $catName = $_POST['name'];
        $catStatus = $_POST['status'];

        $sql = "insert into category (name, status) values ('$catName', '$catStatus')";
    
        $res  = $conn->query($sql);
        if($res)
            header('Location: index.php');
        else    
            echo "error happened";
?>