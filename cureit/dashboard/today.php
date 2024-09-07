<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    table{
        font-family:sans-serif;
        width: 100%;
        border-collapse:collapse;
        border-color:white;
    }
    td{
        color:#223a66;
        padding:10px;
        text-alignment:center;
    }
    th{
        background-color:white;
        padding:10px
    }
    tr{
        background-color:grey;
        border-radius:30px;
    }
    tr:nth-child(even){
        background-color:white;
}
Button{
    font-family:sans-serif;
    background-color:#223a66;
    color:white;
    border-radius:30px;
    padding:2px;
    font-weight:bold;
    cursor:pointer;
}
</style>
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>Cure</span>IT<br>_______________</p>
  <a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Profile</a>
  <a href="patient.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Patients</a>
  <a href="Today.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Todays Appointments</a>

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color:  #f7403b;;" class="nav"  >&#9776; Todays Appointments</span>
<span style="font-size:30px;cursor:pointer; color: #f7403b;" class="nav2"  >&#9776; Todays Appointments</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<img src="images/doctorpanel.jpg" class="pro-img " style="border-radius: 30px;"/>
		<p style> Doctor Kartik <span>MBBS</span></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>
<?php
    date_default_timezone_set("Asia/Kolkata");
$date=date("d-m-Y");

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"cureit");
$data=mysqli_query($con,"SELECT p_name,date,time,type FROM appointment where doc_name like 'kartik' and date like '$date'");
echo "<table border='1'>
<tr>
<th>Patient_name</th>
<th>Date</th>
<th>Time</th>
<th>Type</th>
<tr>
";
while($row=mysqli_fetch_row($data))
{
    echo"<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
     echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
   // echo "<td>".$row[4]."</td>";
    //echo "<td>".$row[5]."</td>";
    echo "</tr>";
}
echo "<table>";
?>
<div>
<a href="https://cureit.000webhostapp.com/videcalling.html">
<Button>
    Connect A Call to Patient
    </Button>
</a>0-
</div>


	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

</script>

</body>


</html>
