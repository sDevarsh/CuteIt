<html>
    <head>
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit">
        </form>
    </body>
</html>
<?php
if(isset($_FILES['file']))
{
$file_name=$_FILES['file']['name'];
$img2=$_FILES['file']['tmp_name'];
$img=addslashes(file_get_contents($_FILES['file']['tmp_name']));
$con=mysqli_connect("localhost","root","","cureit");

if(move_uploaded_file($img2,"upload-img/".$file_name))
{
    echo("done");
}
$q="update doctor set img='$img' where id=1";

$r=mysqli_query($con,$q); 

$qry1="select * from doctor";
$result=mysqli_query($con,$qry1);
while($row=mysqli_fetch_array($result))
{
    
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/>';
}}
?>