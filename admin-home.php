<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;"> Blood Brigade</a></h2></div>
            <div id="body">
                <br>
                <?php
                $un=$_SESSION['un'];
                if(!$un){
                    header("Location:index.php");
                }
                ?>
                <center>
                <h1>WELCOME ADMIN</h1><br><br>
                </center>
                <center>
                <ul>
                    <li><a href="donar -red.php">Donor Registration</a></li>
                    <li><a href="donor-list.php">Donor List</a></li>
                    <li><a href="stroke-blood-list.php">Stoke Blood List</a></li>
                </ul><br><br><br><br><br>
                <ul>
                    <li><a href="out-stoke-blood-list.php">Out Stock Blood List</a></li>
                    <li><a href="exchange-blood-list.php">Exchange Blood Registration</a></li>
                    <li><a href="exchange-blood-list1.php">Exchange Blood List</a></li>
                </ul>
                </center>
            </div>
            <div id="footer"><h4 align="center">Copyright@myprojecthd</h4>
                <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
            </div>
        </div>
    </div>
</body>
</html>