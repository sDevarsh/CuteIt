<?php
session_start();
$sus= $_SESSION['pemail'];
 $con=mysqli_connect("localhost","root","");
 mysqli_select_db($con,"cureit");
 $q="select doc_name,date,time,type from appointment where p_email='$sus'";
 $result=mysqli_query($con,$q)or die(mysqli_error($con));
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="webs">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
    table, th, td {
  border: 1px solid black;
 
}
    h2 {
      color: #e12454;
      display: inline;
    }
</style>
</head>

<body>

<div class="container mt-3">
    <div class="row">
      <div class="col-md-8">
        <h2><a href="website.php"><i class='fas fa-angle-left' style='font-size:36px; color: #e12454;'></i></a></h2>
        <h2><b class="offset-1">Your Appointments</b></h2>
      </div>
     
    </div><br> <br>
</body>

</html>
<?php
echo "<table border='1'>
<tr>
<th>Doctor name</th>
<th>Date</th>
<th>Time</th>
<th>Type</th>
<tr>
";


 while($row=mysqli_fetch_array($result)){
    echo "<tr>";  
  echo "<td>".$row['doc_name']."</td>";
  echo "<td>".$row['date']."</td>";
  echo "<td>".$row['time']."</td>";
  echo "<td>".$row['type']."</td>";

  echo "</tr>";

} 
echo "</table>";

?>
