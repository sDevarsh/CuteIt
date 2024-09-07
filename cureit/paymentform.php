<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"cureit");
$email=$_SESSION['pemail'];
$result1=mysqli_query($con,"select * from user where email='$email'");
while($row=mysqli_fetch_array($result1)){
      $pid=$row['id'];
      $pname=$row['name'];
      $number=$row['number'];
}     
$MERCHANT_KEY = "E0BdzS";
$SALT = "PPyWZlr2GoMreKkZ3aG7VfyPfsCg5tTQ";
$txnid=rand(1,1000000);
$name=$pname;
$email=$email;
$amount=0.0001;
$phone=$number;
$surl="https://cureit.000webhostapp.com/success/index.php";
$furl="https://cureit.000webhostapp.com/success/cancel.php";
$productInfo="doctor consulatation";

// Merchant Salt as provided by Payu

$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hashString=$MERCHANT_KEY."|".$txnid."|".$amount."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
   
$hash = strtolower(hash('sha512', $hashString));
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head >
</head>
<body>
<h1>PayUMoney Payment Request Form </h1>
<form action="https://secure.payu.in/_payment"  name="payuform" method=POST >
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY;?>" />
<input type="hidden" name="hash"  value="<?php echo $hash;?>" />
<input type="hidden" name="txnid" value="<?php echo $txnid;?>"/>
<table>
<tr>
<td>Amount: </td>
<td><input type="hidden" name="amount" value="<?php echo $amount;?>" /></td>
<td>First Name: </td>
<td><input type="hidden"name="firstname" id="firstname" value="<?php echo $name;?>" /></td>
</tr>
<tr>
<td>Email: </td>
<td><input type="hidden" name="email" id="email"  value="<?php echo $email;?>" /></td>
<td>Phone: </td>
<td><input type="hidden"name="phone" value="<?php echo $phone;?> " /></td>
</tr>
<tr>
<td>Product Info: </td>
<td colspan="3"><input type="hidden"name="productinfo"  value="<?php echo $productInfo;?>"/></td>
</tr>
<tr>
<td>Success URI: </td>
<td colspan="3"><input type="hidden" name="surl"  size="64" value="<?php echo $surl;?> " /></td>
</tr>
<tr>
<td>Failure URI: </td>
<td colspan="3"><input type="hidden" name="furl"  size="64" value="<?php echo $furl;?> " /></td>
</tr>
<tr>
<td colspan="3"><input type="hidden" name="service_provider" value="" /></td>
</tr>
<tr>

<td colspan="4"><input type="submit" value="Submit" id="button" /></td>
</tr>
</table>
</form>
</body>
</html>
<script>
    window.onload=init
    function init(){
        document.getElementById("button").click();
    }
 </script>