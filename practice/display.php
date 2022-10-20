<?php
require_once "dbconnect.php";
?>
<style>
    table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
</style>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shirnk-to-fit=no">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <title> PRODUCT LIST</title>

</head>

<body>
    <form action="">
   
    <button class="btn btn-success my-3"> <a href="form.html" class="text-light"> ADD NEW CATEGORY</a> </button>
    <button class="btn btn-success my-3"> <a href="drop.php" class="text-light"> ADD NEW PRODUCT</a> </button>
        
            <table>
                
                <tr>

                    <th>Product ID</th>

                    <th>Category Name</th>

                    <th>Product Name</th>

                    <th>Product Price</th>
                    <div>
                        <th>Actions </th>

                        <th>Actions </th>
                    </div>
                </tr>

                <?php
                $sqlQuery = "select * from product";
                $res = $conn->query($sqlQuery);
                while ($row = mysqli_fetch_object($res)) {
                ?>
                    <tr>
                        <td><?php echo $row->id ?></td>
                        <td><?php echo $row->category ?></td>
                        <td><?php echo $row->name ?></td>
                        <td><?php echo $row->price ?></td>

                        <td><a href="proddelete.php?id=<?php echo $row->id ?> " style="text-decoration: none; color: #FF0000;">Delete</a></td>
                        <td><a href="produpdate.php?id=<?php echo $row->id ?>" style="text-decoration: none; color: #006fbb;">Update</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
       
    </form>
</body>

</html>