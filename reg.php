<?php
include("db.php");
if(isset($_POST['submit']))
{
  $alumini=$_POST['alumini'];
  $batch=$_POST['batch'];
  $category=$_POST['category'];
  $name=$_POST['name'];
  $rollno=$_POST['rollno'];
  $date=$_POST['date'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $city=$_POST['city'];

  $allow_image_extension=array("jpg","png","jpeg");
        $file_extension=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
        IF(!file_exists($_FILES["image"]["tmp_name"]))
        {
            echo"<script>alert('plz upload image')</script>";
        }
        else if(!in_array($file_extension,$allow_image_extension))
        {
            echo"<script>alert('plz upload valid image of type png,jpeg,jpg')</script>";
        }
        else if(($_FILES["image"]["size"]>500000))
        {
            echo"<script>alert('plz enter image of size under 500kb')</script>";
        }
        else
        {
                $path=$_FILES['image']['name'];
                $file=$_FILES['image']['tmp_name'];
                $new_name=time();
                $filename=$new_name.".".pathinfo($path,PATHINFO_EXTENSION);
                $destination="image/".$filename;
                // echo"<script>alert('image upload sucessful')</script>";
                if(move_uploaded_file($file,$destination))
                {
                   $msg=mysqli_query($con,"INSERT INTO `alumini_master` (`username`,`batch`,`branch`,`name`,`rollno`,`date_of_birth`,`email`,`mobile`,`gender`,`address`,`current_address`,`photo`) 
                   VALUES ('$alumini','$batch','$category','$name','$rollno','$date','$email','$mobile','$gender','$address','$city','$filename')");
            if($msg)
            {
              echo"<script>alert('data uplode sucessful')</script>";
              echo"<script>alert('ueser name=$alumini password=$mobile')</script>";
              echo"<script>window.location='logina.php'</script>";


            }
            else{
              echo"<script>alert('error')</script>";
            }
                }
                
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
    <style>
        h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:SlateBlue;
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: Calibri; 
  color:white; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  /* text-align: ;  */
  background-color: SlateBlue; 
  border-collapse: collapse; 
  border: 2px solid navy
}
table.inner{
  border: 0px
}
    </style>
</head>
<body>
<html>
<head>
<title>Alumini Registration Form</title>

</head>
 
<body>
  
<form action ='' method="POST" target="_blank" enctype="multipart/form-data">
<h3><i>ALUMINI REGISTRATION FORM</i></h3>

 
<table align="center" cellpadding = "10">
<tr>
<td>USER NAME</td>
<td><input type="text" name="alumini" value="alumini"  /></td>
</tr>

<tr>
 <td> 
    <b> Choose BATCH </b>
 </td>
 <td>  
     <select name="batch">
        <option value="Chose">Choose</option>
         <option value="2021-2023">2021-2023</option>
        <option value="2020-2022">2020-2022</option>
        <option value="2019-2021">2019-2021</option>
        <option value="2018-2020">2018-2020</option>
        <option value="2017-2019">2017-2019</option>
    </select> 
 </td> 
  </tr>   
 
<tr>
 <td> 
    <b> Choose your category </b>
 </td>
 <td>  
     <select name="category">
        <option value="Chose">Choose</option>
         <option value="MCA">MCA</option>
        <option value="BCA">BCA</option>
        <option value="MBA">MBA</option>
        <option value="Science">Science</option>
        <option value="Arts">Arts</option>
    </select> 
 </td> 
  </tr>   

<!----- First Name ---------------------------------------------------------->
<tr>
<td>FULL NAME</td>
<td><input type="text" name="name" maxlength="30" required="required"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>ROLL NUMBER</td>
<td><input type="text" name="rollno" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 <td><input type="date" name="date"></td>

<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="email" name="email" maxlength="100" required="required" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="mobile" maxlength="10" />
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="gender" value="Male" />
Female <input type="radio" name="gender" value="Female" />
Other <input type="radio" name="gender" value="Other" />

</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CURRENT ADDRESS</td>
<td><input type="text" name="city" maxlength="30" placeholder="current city" required="required" />
(max 30 characters a-z and A-Z)
</td>
</tr>
<tr>  
    <td> <b> Select your Profile Pic </b> </td>  
    <td> <input type="file" name="image" /> </td>  
  </tr>
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit"  name="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
</body>
</html>
</body>
</html>