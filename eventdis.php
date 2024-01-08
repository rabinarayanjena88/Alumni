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
    <style>
        .KL{
            position: center;
        }
        body{
            position:center;
        }
    </style>
</head>
<body>
    <h1>EVENT</h1>
    <div class="KL">
    <?php
    $query="SELECT * FROM `event` ORDER BY id";
    $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
        {

    echo $row['address']; 
        }
    ?>
    </div>
    <div class="kk">
    <UL>
<li><a href="aluminilog.php">Back to Dashboard</a></li>
    </UL>
</div>
</body>
</html>