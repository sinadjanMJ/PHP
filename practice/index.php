<?php
    require_once "dbconnect.php";
?>
<style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}


</style>
    <title>DISPLAY CATEGORY</title>
 <table>
    <tr>

        <th>id</th>
        
        <th>Category name</th>
        
        <th>Category Status</th>
        
        <th>Actions </th>
        <th>Actions </th>
    </tr>

    <?php
        $sqlQuery = "SELECT * from category";
        $res = $conn->query($sqlQuery);
        while($row =mysqli_fetch_object($res)){
            ?>
                <tr>
                    <td><?php echo $row->id?></td>
                    <td><?php echo $row->name?></td>
                    <td><?php echo $row->status?></td>
                    <td><a href="deleteCategory.php?id=<?php echo $row->id?>"style="text-decoration: none; color: #FF0000;">Delete</a></td>
                    <td><a href="updateCategory.php?id=<?php echo $row->id?>"style="text-decoration: none; color: #006fbb;">Update</a></td>
                </tr>
        <?php
            }   
        ?>
</table>


