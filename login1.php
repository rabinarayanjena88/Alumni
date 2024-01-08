<?php
include("db.php");
session_start();
if(isset($_POST['save']))
{
    $userid=$_POST['userid'];
    $pass=$_POST['password'];
    $query="SELECT * FROM `login_master` WHERE userid='$userid'";
    $result=mysqli_query($con,$query);
    $row=mysqli_num_rows($result);
    if($row>0)
    {
        $data=mysqli_fetch_array($result);
        $realpass=$data['password'];
        if($realpass==$pass)
        {
            $_SESSION['id']=$data['id'];
            // $_SESSION['name']=$data['name'];
            echo"<script>window.location='about.php'</script>";

        }
        else
        {
            echo"<script>alert('Wrong password')</script>";
    
        }
    }
    else
    {
        echo"<script>alert('Username doesnot exist')</script>";


    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body bgcolor="yellow">
    <form name="loginform" method="post">
<center>
    <label for="userid">
    <b>Userid :</b>
    </label>
    <input type="text" name="userid" placeholder=" Enter userid" id="userid"required/>
    <br><br>
    <label for="password">
    <b>Password :</b>
    </label>
    <input type="text" name="password" placeholder=" Enter password" id="password"required/>
    <br><br>
    <button type="submit" name="save" >Login</button>
    <centerS>
</form>
</body>
</html>