<?php
session_start();
if(isset($_POST['SubmitButton0']))
{
  $count=0;
$email=$_POST['email'];
$password=$_POST['pwd'];
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"cureit");
$q="SELECT * FROM `user`";
$r=mysqli_query($c,$q);

while($row=mysqli_fetch_array($r))
{
  if($row['email']==$email && $row['password']==$password)
  {
    $_SESSION['pemail']=$email;
    $count=1;
        header('location:website.php');
  }
  else
  {
    continue;
  }
}
$q1="SELECT * FROM `doctor`";
$r1=mysqli_query($c,$q1);

while($row=mysqli_fetch_array($r1))
{
  if($row['email']==$email && $row['password']==$password)
  {
    $_SESSION['docemail']=$email;
    $count=1;
        header('location:dashboard\index.php');
  }
  else
  {
    continue;
  }
}

if ($count==0)
  {
    echo '<script>alert("worng email or password")</script>';
  }


}




if(isset($_POST['SubmitButton1']))
{
  $user=$_POST['Username'];
$password=$_POST['pwd'];
$email=$_POST['email'];
$contact=$_POST['contact'];

$con=mysqli_connect("localhost","id18287020_cureit123","M*{YG]n~[/3y1]lt");
$db=mysqli_select_db($con,"id18287020_cureit");

$r=mysqli_query($con,"INSERT INTO `user`( `name`, `number`, `email`, `password`) VALUES ('$user','$contact','$email','$password')") or die(mysqli_error($con));
if ($r) 
{
   echo '<script>alert("SIGN UP SUCCESFULL")</script>';
   header("Refresh:0, url=index.php");


}

else
{
  echo '<script>alert("EMAil  ALREADY EXIST")</script>';
}

}
?>





,<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="login_anii.css">
</head>
<body>


<div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <div class="sign-in-htm">
        <form method="post" action="">
        <div class="group">
          <label for="email" class="label">Your Email</label>
          <input id="user" type="email" class="input" name="email" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pwd" type="password" class="input" data-type="password" name="pwd" required>
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>




        <div class="group">
          <input type="submit" class="button" value="Sign In" name="SubmitButton0">
        </div>


</form>
<form action="" method="post">

        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </div>
      <div class="sign-up-htm">
        <div class="group">
          <label for="Username" class="label">username</label>
          <input id="Username" type="text" class="input" name="Username"required>
        </div>
        <div class="group">
          <label for="pwd" class="label">Password</label>
          <input id="pwd" type="password" class="input" data-type="password" name="pwd"required>
        </div>
        <div class="group">
          <label for="tel" class="label">contact no.</label>
          <input id="tel" type="tel" class="input" data-type="contact no." pattern="[0-9]{5}-[0-9]{5}" placeholder="12345-67890" name="contact"required>
        </div>
        <div class="group">
          <label for="email" class="label">Email Address</label>
          <input id="email" type="email" class="input"name="email" required>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up" name="SubmitButton1">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
      </div>
    </div>
  </div>
</div></body>
</html>