<?php
include("db.php");
if(isset($_POST['submit']))
{
    $address=$_POST['address'];
    $msg=mysqli_query($con,"INSERT INTO `event` (`address`) VALUES ('$address')");
            if($msg)
            {
              echo"<script>alert('data uplode sucessful')</script>";
            }
            else{
              echo"<script>alert('error')</script>";
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
</head>
<body>
    <form method="post">
    <div class="kanha">
    <tr>
        <h1>EVENT</h1>
<td> <br /><br /><br /></td>
<td><textarea name="address" rows="4" cols="30"></textarea></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit"  name="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
    </div>
    <div class="kk">
    <UL>
<li><a href="index3.php">Back to Dashboard</a></li>
    </UL>
</div>
    </form>
</body>
</html>