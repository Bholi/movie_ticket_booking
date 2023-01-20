<?php
session_start();
@include 'config.php';
@include 'nav.php';
$query = "SELECT * FROM `movie`";
$run = mysqli_query($conn,$query) or die('error');
?>
<html>
    <head>
    <style>
      .btn2 {
 background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 35px;
  text-align: center;
  text-decoration: none;
  margin: 10px;
  transition-duration: 0.4s;
  cursor: pointer;
  margin-top: 10px;
  float: right;
}
.btn_2 {
  background-color: white; 
  color: black; 
  border: 2px solid crimson;
}
.btn_2:hover {
  /* background-color: #4CAF50; */
  background-color: #9C27B0;
  color: white;
}

.post{
  margin-top: 50px;
  margin-left: 80px;
  
}
    </style>

    </head>

    <body>
    <div><a href="addmovie.php" data-inline="true"><button class="btn2 btn_2"">Add Movie</button></a></div>

    <div><a href="addupcoming.php" data-inline="true"><button class="btn2 btn_2">Add Upcoming Movie</button></a></div>
    <div><a href="addbooking.php" data-inline="true"><button class="btn2 btn_2">Add Booking Movie</button></a></div>
   
   <div class="post">
   <?php
    while($row = mysqli_fetch_assoc($run)){     
?>
<div class="card" style="width: 200px; text-align:center; float:left; margin: 20px;">
    <?php
    echo "<img height='180px' width='200px' src='../thumb/".$row['image']."'>";
    ?>
  <div class="container">
    <h4><b><?php echo $row['movie_name'];?></b></h4>
    <a href="viewmovie.php?id=<?php echo $row['id'];?>"><button class="btn btn1">View Details</button></a>
  </div>
</div>
<?php
    }
    ?>
   </div>
    </body>
</html>











