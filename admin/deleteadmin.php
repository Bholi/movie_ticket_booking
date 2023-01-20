<?php
@include 'config.php';
@include 'header.php';
$id = $_GET['id'];
$delete = "delete from admin where id='$id'";
$result = mysqli_query($conn,$delete);
header("location:adminlist.php");
?>