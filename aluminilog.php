<?php
include("db.php");
?>
<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
.sidenav{
  background-color: purple;
}
/* body
{
   < background-image:src="kkaaa.jpg" alt=""> ;

} */
.box{
  background-color:pink;
}
  </style>
</head>


<body>
    <background-image: src="kaaaa.jpg" alt=""> ;

	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>Welcome<br>Alumni</span></p>
  <a href="aluminilog.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="display1.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Registraion From</a>
  <a href="eventdis.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Events</a>
  <!-- <a href="#"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Notice</a>
  <a href="#"class="icon-a"><i class="fa fa-user sattings"></i> &nbsp;&nbsp;Setting</a>
  <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a> -->

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<p>RABINARAYAN JENA <span><a href="index2.php"> log out </a></span></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	
	<div class="col-div-3">
    <a href="display1.php">
		<div class="box">
			<p>
       <br/><span>Registraion From</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
    </a>
	</div>
	<div class="col-div-3">
    <a href="eventdis.php">
		<div class="box">
			<p><br/><span>Events</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
    </a>
	</div>
	<!-- <div class="col-div-3">
		<div class="box">
			<p>99<br/><span>Notice</span></p>
			<i class="fa fa-shopping-bag box-icon"></i>
		</div>
	</div> -->
	
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
			<p>Top sucessful Alumni List </p>
			<br/>
			<table>
  <tr>
    <th>NAME</th>
    <th>Email</th>
    <th>Passout Year</th>
    <th>Company Name</th>
    <th>Package</th>

  </tr>
  <tr>
    <td>R Jena</td>
    <td>rabinarayanjena88@gmail.com</td>
    <td>2021</td>
    <td>TCS</td>
    <td>50L</td>


  </tr>
  <tr>
    <td>S das</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td>TCS</td>
    <td>50L</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <td>TCS</td>
    <td>50L</td>
  </tr>
  
  
  
</table>
		</div>
	</div>
	</div>

	<!-- <div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
			<p>Total Sale <span>Sell All</span></p>

			<div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class="fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> 70% </div>
    </div>
  </div>
		</div>
	</div>
	</div>
		
	<div class="clearfix"></div>
</div> -->


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script> -->

</body>


</html>


