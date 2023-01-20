<?php
@include 'db.php';
$query = "SELECT * FROM `booking`";
$run = mysqli_query($conn,$query) or die('error');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking</title>
    <!-- <link rel="stylesheet" type="text/css" href="upcoming.css"> -->
  <style>
   
  img{
    object-fit: cover;
  }
  </style>
</head>


<body>
	<h2>Available For Booking</h2>
    <div class="main2">
		<?php
    while($row = mysqli_fetch_assoc($run)){     
?>
      <a href="viewbooking.php?id=<?php echo $row['id']; ?>">
        <div class="card" style="width: 200px; text-align:center; float:left; margin: 20px;">
          <?php
          echo "<img height='290px' width='220px' src='./thumb/" . $row['image'] . "'>";
          ?>
          <div class="container">
              <p><?php echo $row['name']; ?></p>
          </div>
        </div>
      </a>
    <?php
    }
    ?>
		</div>
	
</body>
</html>