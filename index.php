<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{
        padding-top: 10px ;
        background-color: blueviolet;
        background-image:src="https://tse2.mm.bing.net/th?id=OIP.VbGwKxUpmPu2G2Z3eLlY4gHaE8&pid=Api&P=0 "
       }
       div{
        border-top-width: 54px;
border-top-style: solid;
border-left-width: 213px;
border-left-style: solid;
color: blueviolet;
      }
      .banner{
        margin: 70px auto 0;
      }
      .banner a{
        width: 150px;
        text-decoration: none;
        display: inline-block;
        margin: 0 10px;
        padding: 12px 0;
        color: #fff;
        border: .5px solid #fff;
        position: relative;
        z-index: 1;
        transition:color 0.5s;
      }
      .banner a span {
        width: 0%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: #fff;
        z-index: -1;
        transform: 0.5s;

      }
      .banner a:hover span{
        width: 100%;
      }
      .banner a:hover {
    color: black;
      }

    </style>
</head>
<body>
    <table border="3" width="100%" bgcolor="litegreen" height="10%">
        <tr>
            <th><font color="purpole"><a href="index.php">HOME</a></font></th>
            <th><a href="about.php">ABOUT US</a></th>
            <th><a href="galary.php">GALLARY</a></th>
            <th><a href="mobile.php">CONTACTS</a></th>

        </tr>
    </table>
    <!-- <div>
        <img src="https://tse2.mm.bing.net/th?id=OIP.VbGwKxUpmPu2G2Z3eLlY4gHaE8&pid=Api&P=0 ">
    </img>
    </div> -->
    <div class="banner">
    <tr><a href="login.php"><span></span>log in</a></tr>

    <tr><a href="reg.php"><span></span>student rejestration</a></tr>

    
    
        </div>
    
</body>
</html>