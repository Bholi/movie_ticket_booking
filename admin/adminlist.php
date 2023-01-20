<?php
@include 'config.php';
@include 'nav.php';
$select = "select * from admin";
$result = mysqli_query($conn,$select);
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List</title>
    <link rel="stylesheet" href="table.css">
</head>
<body> -->
<div class="container">
    <table border="1">
        <caption>
            <h1>Admin List</h1>
        </caption>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <!-- <th>Action</th> -->
        </tr>
        <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td>encrypted</td>
            <!-- <td><a  onclick="return confirm('Are you sure want to delete')" href="deleteadmin.php?id=<?php echo $row['id'];?>"><button class="delete">Delete</button></a></td> -->
        </tr>
        <?php
    }
    ?>
    </table>
</div>
<!-- </body>
</html> -->

