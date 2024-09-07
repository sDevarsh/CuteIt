<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"cureit");
$docid=$_SESSION['did'];
$result=mysqli_query($con,"select username from doctor where id='$docid'");
while($row=mysqli_fetch_array($result)){
      $docname=$row['username'];
}
$email=$_SESSION['pemail'];
 $result1=mysqli_query($con,"select * from user where email='$email'");
 while($row=mysqli_fetch_array($result1)){
       $pid=$row['id'];
       $pname=$row['name'];
       $number=$row['number'];
 }     
$date=$_COOKIE['Date'];
$time=$_COOKIE['Time'];
$type=$_SESSION['type'];
$result=mysqli_query($con,"INSERT INTO `appointment`( `doc_id`, `doc_name`, `p_id`, `p_name`, `p_number`, `p_email`, `date`, `time`, `type`) VALUES ('$docid','$docname','$pid','$pname','$number','$email','$date','$time','$type');");
if(isset($result)){
      echo '<script>alert("DAta eneterd succesffuly")</script>';}
?>