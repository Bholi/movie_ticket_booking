<?php
@include 'db.php';
$query = "SELECT * FROM `movie`";
$run = mysqli_query($conn,$query) or die('error');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>scrollbar</title>
  <style>
    /* .card{
      height: 150px;
    } */
  img{
    object-fit: cover;
    /* height: 240px; */
  }
  </style>
</head>


<body>
	<h2>Recently Added</h2>
    <div class="main2">
		<?php
    while($row = mysqli_fetch_assoc($run)){     
?>
      <a href="viewpost.php?id=<?php echo $row['id']; ?>">
        <div class="card" style="width: 200px; text-align:center; float:left; margin: 20px;">
          <?php
          echo "<img height='290px' width='220px' src='./thumb/" . $row['image'] . "'>";
          ?>
          <div class="container">
              <p><?php echo $row['movie_name']; ?></p>
          </div>
        </div>
      </a>
    <?php
    }
    ?>
		</div>
	
</body>
</html>