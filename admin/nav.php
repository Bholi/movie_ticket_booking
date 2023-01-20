<?php
@include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="<?php echo ADMINURL . 'css/nav.css' ; ?>">
    <link rel="stylesheet" href="<?php echo ADMINURL . 'css/table.css' ; ?>">

    <!-- <link rel="stylesheet" href="./css/header.css"> -->
</head>
<body>
    <nav>
        <label class="heading">Movies Information</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <!-- <li><a href="addmovie.php">Add Movies</a></li> -->
            <li><a href="upcomingpost.php">Upcoming Movies</a></li>
            <!-- <li><a href="addupcoming.php">Add Upcoming</a></li> -->
            <li><a href="adminlist.php">Admin List</a></li>
            <li><a href="categorylist.php">Category</a></li>
            <li><a class="log" href="logout.php">Log Out</a></li>
        </ul>
    </nav>
</body>
</html>