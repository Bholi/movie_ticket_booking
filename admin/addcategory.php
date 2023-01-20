<?php
@include 'config.php';
@include 'nav.php';
if(isset($_POST['submit'])){
    $catname = $_POST['categoryname'];
    $insert= "INSERT INTO `category`(`category_name`) VALUES ('$catname')"; 
    $res = mysqli_query($conn,$insert);
    if($res){
        header("location:categorylist.php");
    }else{
        echo "not submit";
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
    <link rel="stylesheet" href="<?php echo ADMINURL . 'css/category.css';?>">
</head>
<body>
    <div class="container">
        <h1>Add a Category</h1>
        <br>
        <p>Add Category Name</p><br>
        <hr>
        <br>
        <form action="addcategory.php" method="POST">
            <input type="text" name="categoryname" placeholder="Category Name">
            <br><br>
            <input type="submit" class="button" name="submit" value="Add a Category">
        </form>
    </div>
</body>
</html>
