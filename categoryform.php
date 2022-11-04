<?php
require_once "dbconnect.php";


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shirnk-to-fit=no">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <title>CREATE PRODUCT LIST</title>

</head>
<style>
    .container  {
        
        margin: 142px 525px;
        padding: 50px;
        background-color:  #39CCCC;
        border-radius: 5px;
        width: 200px;
        box-shadow: 5px 5px 20px black;

    }
    input,select{
        border-radius: 5px;
        height: 30px;
        width: 200px;
        margin-top: 50;

    }
   
.btn {
  position: absolute;
  top: 50%;
  left: 50%;
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
}

 .btn:hover {
  background-color: black;
  color: white;
}
body{
    /* background-color: #AAAAAA; */
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,0.7455357142857143) 0%, rgba(9,121,84,1) 12%, rgba(0,212,255,1) 100%);
}
</style>


<body>

    <div class="container">
        <form action="willRecieveUserInput.php" method="post">
            <div class="">
                <div>
                    
                    <label>Category</label>
                    <div>
                        <input type="text" class="" placeholder="Enter Category Name" name="name" autocomplete="off">
                    </div>
                    <br>
                    <label>Status</label>
                    <div>
                        <input type="text" class="" placeholder="Enter Category Status" name="status" autocomplete="off">
                    </div>
                </div>
                <br>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>


    </div>
</body>

</html>