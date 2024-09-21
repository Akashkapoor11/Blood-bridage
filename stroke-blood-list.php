<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registration</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
        td{
            width: 200px;
            height: 40px;
            
        }
    </style>
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
                <h1>Stroke-Blood-List</h1>
                <center><div id="form">
                   <table>
                    <tr>
                        <td><center><b><font color="blue">Name</font></b></center></td>
                        <td><center><b><font color="blue">Qty</font></b></center></td>
                    </tr>
                    <tr>
                        <td><center>O+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donar_registration WHERE bgroup='o+'");
                            echo $row=$q->rowCount();
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                        <td><center>AB+</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donar_registration WHERE bgroup='o+'");
                            echo $row=$q->rowCount();
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                        <td><center>AB-</center></td>
                        <td><center>
                            <?php
                            $q=$db->query("SELECT * FROM donar_registration WHERE bgroup='o+'");
                            echo $row=$q->rowCount();
                            ?>
                        </center></td>
                    </tr>
                   </table>
                </div></center>
            </div>
            <div id="footer"><h4 align="center">Copyright@myprojecthd</h4>
                <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
            </div>
        </div>
    </div>
</body>
</html>