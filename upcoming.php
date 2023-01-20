<?php
@include 'db.php';
$query = "SELECT * FROM upcoming";
$run = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>scrollbar</title>
  <link rel="stylesheet" type="text/css" href="upcoming.css">
</head>

<body>
  <h2>Upcoming Movies</h2>
  <div class="main2">
    <?php
    while ($row = mysqli_fetch_assoc($run)) {
    ?>
      <a href="viewupcomingpost.php?id=<?php echo $row['id']; ?>">
        <div class="card" style="width: 200px; text-align:center; float:left; margin: 20px;">
          <?php
          echo "<img height='290px' width='220px' src='./thumb/" . $row['image'] . "'>";
          ?>
          <div class="container">
            <!-- <h4><b><?php echo $row['movie_name']; ?></b></h4> -->
            <!-- <a href="viewupcomingpost.php?id=<?php echo $row['id']; ?>" style="color:black;"> -->
              <p><?php echo $row['movie_name']; ?></p>
            <!-- </a> -->
          </div>
        </div>
      </a>
    <?php
    }
    ?>
  </div>
  </div>
</body>

</html>