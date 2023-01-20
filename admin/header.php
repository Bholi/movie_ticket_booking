<?php
  define('ADMINURL' ,'http://localhost/project/admin/');
  session_start();

if(isset($_SESSION['loginsuccesss'])){
}else{
    header('location:login.php');
}
?>