<?php
require_once "dbconnect.php";


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shirnk-to-fit=no">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <title>CREATE PRODUCT LIST</title>

</head>
<style>
    .container {
        margin: 50px 122px;
        padding: 100px;
        margin: 0, auto;
        background-color: #8084A4;
        border-radius: 25px;
        ;
        box-shadow: 5px 5px 20px black;

    }
</style>


<body>
    <div class="container">
        <form action="productsave.php" method="post">
            <div class="form-group">
                <div>
                    <label>Category</label>
                    <br>
                    <select class="form-control" name="catname">

                        <?php
                        $sqlQuery = "select name from category";
                        $res = $conn->query($sqlQuery);
                        while ($row = mysqli_fetch_object($res)) {

                        ?>
                            <option value="<?php echo $row->name ?>"><?php echo $row->name ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <br>
                    <label>Product</label>
                    <div>
                        <input type="text" class="form-control" placeholder="Enter Product Name" name="pname" autocomplete="off">
                    </div>
                    <br>
                    <label>Price</label>
                    <div>
                        <input type="text" class="form-control" placeholder="Enter Product Price" name="price" autocomplete="off">
                    </div>
                </div>
                <br>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>


    </div>
</body>

</html>