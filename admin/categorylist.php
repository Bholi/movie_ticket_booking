<?php
@include 'config.php';
@include 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  .btn {
 background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  margin-top: 50px;
  margin-left: 360px;
}
.btn1 {
  background-color: white; 
  color: black; 
  border: 2px solid crimson;
}
.btn1:hover {
  /* background-color: #4CAF50; */
  background-color: #9C27B0;
  color: white;
}
    table{
        margin: auto;
        margin-top: 30px;
    }
    </style>
</head>
<body>
<a href="addcategory.php"><button class="btn btn1">Add a Category</button></a>
    <table border="1" width=50%>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <!-- <th>No. of posts</th> -->
            <th colspan="2">Action</th>
        </tr>
        <?php
        $select = "select * from category";
        $result = mysqli_query($conn,$select);
        ?>
        <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr align="center">
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['category_name'];?></td>
            <!-- <td><?php echo $row['post'];?></td> -->
            <td><a  onclick="return confirm('Are you sure want to delete')" href="deletecategory.php?id=<?php echo $row['id'];?>"><button class="delete">Delete</button></a></td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>