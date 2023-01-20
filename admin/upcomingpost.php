<?php
session_start();
@include 'config.php';
@include 'nav.php';
$query = "SELECT * FROM upcoming";
$run = mysqli_query($conn,$query) or die('error');
?>

<html>
    <head>
    <style>
        .btn {
 background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 35px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  transition-duration: 0.4s;
  cursor: pointer;
  margin-top: 10px;
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
    </style>

    </head>

        <body>
        <?php
    while($row = mysqli_fetch_assoc($run)){     
?>
<div class="card" style="width: 200px; text-align:center; float:left; margin: 20px;">
    <?php
    echo "<img height='180px' width='200px' src='../thumb/".$row['image']."'>";
    ?>
  <div class="container">
    <h4><b><?php echo $row['movie_name'];?></b></h4>
    <a href="viewupcoming.php?id=<?php echo $row['id'];?>"><button class="btn btn1">View Details</button></a>
  </div>
</div>
<?php
    }
    ?>
        </body>
</html>