<?php
        include("db.php");
        if(isset($_GET['did']))
        {
           $id=$_GET['did']; 
           $query="delete from alumini_master where id='$id'";
           $result=mysqli_query($con,$query);
           if($result)
           {
            echo"<script>alert('Data delete sucessfully')</script>";
           }
           else{
            echo"<script>alert('Something went wrong')</script>";
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
    table ,th ,td {border: 1px solid black;}
    th{background-color: aqua;}
</style>
</head>
<body>
<table>
  <th>Sl No</th>
  <th>UserName</th>
  <th>Batch</th>
  <th>Branch</th>
  <th>Name</th>
  <th>Roll No</th>
  <th>Date of Birth</th>
  <th>Email</th>
  <th>Contact</th>
  <th>Gender</th>
  <th>Address</th>
  <th>Current city</th>
  <th>Image</th>
  <th>Edit</th>
  <th>Delete</th>
        <tbody>
        <?php
        $count=1;
        $query="SELECT * FROM `alumini_master` ORDER BY name";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
        {
         ?>
            <tr>
                <td> <?php echo $count; ?></td>
                <td> <?php echo $row['username']; ?></td>
                <td> <?php echo $row['batch']; ?></td>
                <td> <?php echo $row['branch']; ?></td>
                <td> <?php echo $row['name']; ?></td>
                <td> <?php echo $row['rollno']; ?></td>
                <td> <?php echo $row['date_of_birth']; ?></td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['mobile']; ?></td>
                <td> <?php echo $row['gender']; ?></td>
                <td> <?php echo $row['address']; ?></td>
                <td> <?php echo $row['current_address']; ?></td>
                <?php $photo=$row['photo']; ?>
                <td>  <img src='image/<?php echo $photo; ?>' width='50px' height='100px'> </td>


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
         <?php  
        
         $count++;
        }
?>
        </tbody>
</table>
<div class="kk">
    <UL>
<li><a href="index3.php">Back to Dashboard</a></li>
    </UL>
</div>
</body>
</html>