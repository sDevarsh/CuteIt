<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .card{
    background-color:#1b203d;
    height:550px;
    width:500px;
    margin-top:80px;
    border-radius:30px;
    box-shadow: 10px 5px 5px black;  
  }
  .editprofile{
    font-family:sans-serif;
    font-size:30px;
    font-weigth:bolder;
    margin-left:180px;
    padding-top:20px;
    color:white;
  }
  .label{
    font-family:sans-serif;
    font-size:20px;
    margin-left:120px;
    color:white;
    margin-top:30px;  
  }
  button{
    color:white;
    background-color:red;
    font-family:sans-serif;
    border-radius:30px;
    margin-left:120px;
    margin-top:30px;
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
<span style="font-size:30px;cursor:pointer; color:  #f7403b;;" class="nav"  >&#9776; Profile</span>
<span style="font-size:30px;cursor:pointer; color: #f7403b;" class="nav2"  >&#9776; Profile</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<img src="images/doctorpanel.jpg" class="pro-img " style="border-radius: 30px;"/>
		<p style> Doctor Kartik <span>MBBS</span></p>
	</div>
</div>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"cureit");
$result=mysqli_query($con,"Select * from doctor where id=1");
while($row=mysqli_fetch_row($result))
{
  $id=$row[0];
  $username=$row[1];
  $email=$row[2];
  $phone=$row[3];
  $address=$row[4];
  $charges=$row[5];
}
?>

<div class="card" style="margin-left:60px">
<form action="#" method="get" >
  
<div class="editprofile">EditProfile</div>
     <input type="text"value=<?php echo $id ?> name="id" hidden style="border-radius:30px; margin-left:120px; ">
    <div class="label"> UserName:   </div> <input type="text" disabled="true"value=<?php echo $username ?> name="username"  style="border-radius:5px; margin-left:120px; background-color:white">
    <div class="label"> EmailAddress:  </div>  <input type="text" value=<?php echo $email?> name="email" style="border-radius:5px; margin-left:120px">
    <div class="label"> Phone:  </div>  <input type="text" value=<?php echo $phone?> name="phone"style="border-radius:5px; margin-left:120px">

    <div class="label"> Consultation Charger:  </div>  <input type="text"value=<?php echo $charges?> name="consultation"style="border-radius:5px; margin-left:120px">
    <div class="label"> Hospital Address:  </div>  <input type="text"  value=<?php echo $address?> name="address"style="border-radius:5px; margin-left:120px"><br>
    <button name="submit">Edit Profile</button>
</form>
  </div>
</div>
<?php
  if(isset($_GET['submit'])){
    $id=$_GET['id'];
    $email=$_GET['email'];
    $phone=$_GET['phone'];
    $charges=$_GET['consultation'];
    $address=$_GET['address'];
    $con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"cureit");
$qry="update doctor set email='$email',phone='$phone',address='$address',charges='$charges' where id='$id'";
$result=mysqli_query($con,$qry);

  }
?>

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
