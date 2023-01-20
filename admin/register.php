<?php

@include 'config.php';

if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = md5($_POST['pass']);
    $cpass = md5($_POST['cpass']);

    $select = "SELECT * FROM admin WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn,$select);

    if(mysqli_num_rows($result)>0){
         $error[] = 'user already exist!';
    }
    else{
        if($pass != $cpass){
            $error[] = 'password not matched';
        }
        else{
            $insert = "INSERT INTO admin(name,email,password) VALUES('$name','$email','$pass')";
            mysqli_query($conn,$insert);
            header('location:login.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="form_container">
        
        <form action="" method="POST">
            <h3>Register Now</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            }
            ?>
            <input type="text" name="name" required placeholder="Enter your name"><?php echo $nameErr ?>
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="pass" required placeholder="Enter password">
            <input type="password" name="cpass" required placeholder="Confirm password">
            <input type="submit" name="submit" value="Register Now" class="form_btn">
            <p>Already have an account? <a href="login.php">Login Here</a></p>
        </form>
    </div>
    
</body>
</html>