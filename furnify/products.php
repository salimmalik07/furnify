<?php 
session_start();
header('location:index.html');
$databasename = $_POST['databasename'];

$link = mysqli_connect("localhost","root","1234","$databasename");

$productname = $_POST['productname'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$filename = $_FILES["productimage"]["name"]; 
$tempname = $_FILES["productimage"]["tmp_name"];     
    $folder = "image/".$filename;

    $reg="INSERT INTO products (price,productname ,productimages,stock) VALUES ('$price','$productname','$filename','$stock')";
    mysqli_query($link ,$reg);
    if (move_uploaded_file($tempname, $folder))  { 
        $msg = "Image uploaded successfully"; 
    }else{ 
        $msg = "Failed to upload image"; 
  } 
 
?> 