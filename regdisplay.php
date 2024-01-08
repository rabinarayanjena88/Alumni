<?php
        include("db.php");
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
<?php
 $query="SELECT * FROM `alumini_master` WHERE username='$userid'";
 $result=mysqli_query($con,$query);
 $row=mysqli_num_rows($result);
 if($row>0)
 {
     $data=mysqli_fetch_array($result);
        $query="SELECT * FROM `alumini_master` ORDER BY  username";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
        {
        
                 echo $row['username']; 
                 echo $row['batch']; 
                echo $row['branch']; 
                 echo $row['name']; 
                 echo $row['rollno']; 
                echo $row['date_of_birth']; 
             echo $row['email']; 
                echo $row['mobile']; 
                echo $row['gender']; 
                echo $row['address']; 
                echo $row['current_address'];
                $photo=$row['photo'];
                 <img src='image/<?php echo $photo; ?>' width='50px' height='100px'> 


                <td>
                    <a href="update.php?eid=<?php echo $row['id']; ?>">
                    <button type="button"
                    onclick="return confirm('Do you want to update data?')">
                        Edit</button>
                </a>
                </td>
                <td>
                    <a href="display1.php?did=<?php echo $row['id']; ?>">
                    <button type="button"
                     onclick="return confirm('Do you want to delete data?')">
                    Delete
                    </button>
                </a>
                </td>
            </tr>
        
        }
 }
</body>
</html>