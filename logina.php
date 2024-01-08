<?php
include("db.php");
session_start();
if(isset($_POST['save']))
{
    $userid=$_POST['userid'];
    $pass=$_POST['password'];
    $query="SELECT * FROM `alumini_master` WHERE username='$userid'";
    $result=mysqli_query($con,$query);
    $row=mysqli_num_rows($result);
    if($row>0)
    {
        $data=mysqli_fetch_array($result);
        $realpass=$data['mobile'];
        if($realpass==$pass)
        {
            $_SESSION['id']=$data['id'];
            // $_SESSION['mobile']=$data['mobile'];
            echo"<script>window.location='aluminilog.php'</script>";

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
    <title>Document</title>
    <link rel="stylesheet" href="stylea.css">
    <style>
        .box form input[type="submit"]
{
    border: none;
    outline: none;
    padding: 9px 25px;
    background: #fff;
    cursor: pointer;
    font-size: 0.9em;
    border-radius: 4px;
    font-weight: 600;
    width: 100px;
    margin-top: 10px;
}
.box form .inputbox i {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #fff;
    border-radius: 4px;
    overflow: hidden;
    transition: 0.5s;
    pointer-events: none;

}
.box{
    position: relative;
    width: 380px;
    height: 420px;
    background: #1c1c1c;
    border-radius: 8px;
    overflow: hidden;
}
.box::before{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,
    transparent,#45f3ff,#45f3ff,#45f3ff);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}
.box::after{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,
    transparent,#45f3ff,#45f3ff,#45f3ff);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
}
.borderline{
    position: absolute;
    top: 0;
    inset: 0;

}
.borderline::before{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,
    transparent,#ff2770,#ff2770,#ff2770);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -1.5s;

}
.borderline::after{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,
    transparent,#ff2770,#ff2770,#ff2770);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -4.5s;

}
@keyframes animate{
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}
    </style>
</head>
<body>
    <div class="box">
        <span class="borderline"></span>
<form class="login" name="loginform" method="post">
    <h2>Sign in</h2>
    <div class="inputbox">
        <input type="text" required="required" name="userid" id="userid">
        <span>Username</span>
        <i></i>
    </div>
    <div class="inputbox">
    <input type="password" required="required" name="password" id="password">
<span>password</span>
<i></i>
    </div>
    <div class="links">
        <a href="#">Forgot Password</a>
        <a href="#">Signup</a>
    </div>
    <input type="submit"  name="save">
</form>
    </div>
</body>
</html>