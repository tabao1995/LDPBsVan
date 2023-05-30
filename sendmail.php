<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(!isset($_POST["submit"])){
    $to = "tp2b0001@gmail.com";
    $subject = "Thông tin khách hàng";
    $message= "Tên Khách hàng : " . $_POST["name"] . "<br> Số Điện Thoại :" . $_POST["phone"];
    mail($to,$subject,$message);
    
}
?>
    
    </body>
    </html>
