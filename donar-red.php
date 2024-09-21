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
                <h1>Donar Registration</h1>
                <center><div id="form">
                    <form action="" method="post">
                    <table>
                        <tr>
                            <td width="200px" height="50px">Enter Name</td>
                            <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                            <td width="200px" height="50px">Enter Father's Name</td>
                            <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter  Father's Name"></td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter Address</td>
                            <td width="200px" height="50px"><textarea name="Address" ></textarea></td>
                            <td width="200px" height="50px">Enter City</td>
                            <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter Age</td>
                            <td width="200px" height="50px"><input type="text" name="Age" placeholder="Enter Age"></td>
                            <td width="200px" height="50px">Select Blood Group</td>
                            <td width="200px" height="50px">
                                <select name="bgroup">
                                    <option>o+</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter Mobile No.</td>
                            <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile Number"></td>
                            <td width="200px" height="50px">Enter Email</td>
                            <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-mail"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="sub" value="save"></td>
                        </tr>
                    </table>
                    </form>
                    <?php
                        if(isset($_POST['sub']))
                        {
                            $name=$_POST['name'];
                            $fname=$_POST['fname'];
                            $address=$_POST['address'];
                            $city=$_POST['city'];
                            $age=$_POST['age'];
                            $bgroup=$_POST['bgroup'];
                            $mno=$_POST['mno'];
                            $email=$_POST['email'];
                            $q=$db->prepare("INSERT INTO donar_registration (name,fname,address,city,age,bgroup,mno,email) VALUES (:name,:fname,:address,:city,:age,:bgroup,:mno,:email)");
                            $q->bindValue('name',$name);
                            $q->bindValue('fname',$fname);
                            $q->bindValue('address',$address);
                            $q->bindValue('city',$city);
                            $q->bindValue('age',$age);
                            $q->bindValue('bgroup',$bgroup);
                            $q->bindValue('mno',$mno);
                            $q->bindValue('email',$email);
                            if($q->execute()){
                                echo "<script>alert('Donor Registration Successfull')</script>";
                            }
                            else{
                                echo "<script>alert('Donor Registraation Fail')</script>";
                            }
                        }
                    ?>
                </div></center>
            </div>
            <div id="footer"><h4 align="center">Copyright@myprojecthd</h4>
                <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
            </div>
        </div>
    </div>
</body>
</html>