<?php
    require_once "dbconnect.php";
    $catID = $_GET['id'];

    // var_dump($catID);
    $sqlQuery = "select * from category where id = $catID";
    
    $res = $conn->query($sqlQuery);
    $row = $res->fetch_assoc();

   // var_dump($res);
    if($_POST){
        var_dump($_POST);
        $catname = $_POST['name'];
        $catstatus = $_POST['status'];

        $sqlQuery ="update  category set name = '$catname', status= '$catstatus' where id = $catID";

        $res = $conn->query($sqlQuery);
        if($res)
        header("location: index.php");

    }
?>




    <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shirnk-to-fit=no">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <title>UPDATE CATEGORY</title>

</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" placeholder="Enter Category Name" name="name" autocomplete="off" value="<?php echo $row['name']?>">
                
                <label>Status</label>
                <input type="text" class="form-control" placeholder="Enter Status" name="status" autocomplete="off" value="<?php echo $row['status']?>">
        
            </div>
            

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>


    </div>
</body>

</html>

