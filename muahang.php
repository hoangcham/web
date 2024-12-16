<?php
    require_once('ketnoi.php');
    $namepr=$_POST['namepr'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $them="INSERT INTO shop_dp(namepr,phone,addres) value ('$namepr','$phone','$address')";
    mysqli_query($conn,$them);

?>