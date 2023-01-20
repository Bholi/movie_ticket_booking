<?php

@include 'config.php';
session_start();
if(isset($_POST['submit'])){
    
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = md5($_POST['pass']);
    

    $select = "SELECT * FROM admin WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn,$select);

    if(mysqli_num_rows($result)>0){
        $_SESSION['loginsuccesss']=1;
        header('location:index.php');
    }
    else{
        $error[] = 'incorrect email or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="form_container">
        
        <form action="" method="POST">
            <h3>Login Now</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            }
            ?>
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="pass" required placeholder="Enter password">
            <input type="submit" name="submit" value="Login Now" class="form_btn">
            <p>Don't have an account? <a href="register.php">Register Here</a></p>
        </form>
    </div>
</body>
</html>