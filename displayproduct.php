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




    .container .select .option .links {
        position: absolute;
        top: 50%;
        left: 25px;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #f1f1f1;
        color: black;
        font-size: 16px;
        padding: 16px 30px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
        width: 50px;
    }
    
    .links :hover {
        background-color: black;
        color: white;
    }

    .parent {
        border-collapse: collapse;
        margin: 0 auto;
        margin-top: 5%;
        font-size: 0.9em;
        text-align: center;
        font-family: sans-serif;
        min-width: 90%;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.15);
    }

    .parent thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    .parent th,
    .parent td {
        padding: 12px 15px;
    }

    .parent th {
        background-color: #39CCCC;
        color: white;
    }

    .parent tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .parent tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .parent tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .parent tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }

    /* .update, .delete:hover {
    background-color: #80ced6;
    color: white;
} */

    .a {
        color: #009879;
        text-decoration: none;
    }

    .link {
        text-decoration: none;
        color: black;
    }
</style>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shirnk-to-fit=no">
    
    <title> PRODUCT LIST</title>

</head>

<body>
    <form action="">
        <div class="container">
            <select name="links" id="" onchange="window.location.href=this.value;">
                <option value="">Select Option</option>
                <option value="index.php"> CATEGORY LIST</option>
                <option value="productform.php">CREATE PRODUCT</option>

            </select>
        </div>
        <div class="parent">
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
              
                $sqlQuery = "SELECT category.name as catName, product.id as prodid, product.name as prodName, product.price as prodPrice from category INNER JOIN product on category.id = product.category";
                $res = $conn->query($sqlQuery);
                while ($row = mysqli_fetch_object($res)) {
                ?>
                    <tr>
                        <td><?php echo $row->prodid ?></td>
                        <td><?php echo $row->catName ?></td>
                        <td><?php echo $row->prodName ?></td>
                        <td><?php echo $row->prodPrice ?></td>

                        <td><a href="proddelete.php?id=<?php echo $row->prodid ?> " style="text-decoration: none; color: #FF0000;">Delete</a></td>
                        <td><a href="produpdate.php?id=<?php echo $row->prodid ?>" style="text-decoration: none; color: #006fbb;">Update</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </form>
</body>

</html>