<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            background-color: pink;
        }
        .slider-fram{
            overflow: hidden;
            height: 800px;
            width: 1200px;
            margin-left: 360px;
            margin-top: 20px;
        }
        @-webkit-keyframes slide_animation{
            0%{left: 0px;}
            10%{left: 0px;}
            20%{left: 1200px;}
            30%{left: 1200px;}
            40%{left: 2400px;}
            50%{left: 2400px;}
            60%{left: 1200px;}
            70%{left: 1200px;}
            80%{left: 0px;}
            90%{left: 0px;}
            100%{left: 0px;}
        }
        .slide-image{
            width: 3600px;
            height: 800px;
            margin: 0 0 0 -2400px;
            position: relative;
            -webkit-animation-name: slide_animation;
            -webkit-animation-duration: 10s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-direction: alternate;
            -webkit-animation-play-state: running;


        }
        .img-container{
            height: 800px;
            width: 1200px;
            position: relative; 
            float: left;
           
        }
        .kk
        {
           position: right;
        }

    </style>
</head>
<body>
<form method="post">
    <div class="slider-fram">
        
        <div class="slide-image">
            
            <div class="img-container">
            <a href="index2.php" >
                <img src="image/1.jpeg">
            </div>
            <div class="img-container">
                <img src="image/2.jpeg">
            </div>
            <div class="img-container">
                <img src="image/3.jpeg">
            </div>
    </a>
        </div>
        
    </div>
    
    </form>
</body>
</html>