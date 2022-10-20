<?php
require_once "dbconnect.php";
$prodID = $_GET['id'];


// var_dump($catID);
$sqlQuery = "select * from product where id = $prodID";

$res = $conn->query($sqlQuery);
$rows = $res->fetch_assoc();


if ($_POST) {

    $cName = $_POST['catname'];
    $pName = $_POST['pname'];
    $price = $_POST['price'];

    $sqlQuery = "update  product set category = '$cName', name= '$pName', price= '$price' where id = $prodID";

    $res = $conn->query($sqlQuery);
    if ($res)
        header("location: display.php");
}
?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shirnk-to-fit=no">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <title>UPDATE PRODUCT</title>

</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <div>
                    <label>Category</label>
                    <br>
                    <input disabled type="text" class="form-control" placeholder="Enter Category Name" name="pname" autocomplete="off" value="<?php echo $rows['category'] ?> ">
                  
                    <br>
                    <label>Product</label>

                    <input type="text" class="form-control" placeholder="Enter Product Name" name="pname" autocomplete="off" value="<?php echo $rows['name'] ?>">
                    <br>

                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Enter Product Price" name="price" autocomplete="off" value="<?php echo $rows['price'] ?>">

                </div>
                <br>

                <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>


    </div>
</body>

</html>