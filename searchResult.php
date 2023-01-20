<?php
include("db.php");
include("nav.php");

$searchText = $_GET['searchText'];

$movie_sql = "SELECT * FROM movie WHERE movie_name LIKE '%$searchText%' ";
$movie_res = mysqli_query($conn, $movie_sql);
// $row =  mysqli_num_rows($movie_res);

$upcoming_sql = "SELECT * FROM upcoming WHERE movie_name LIKE '%$searchText%' ";
$upcoming_res = mysqli_query($conn, $upcoming_sql);
// $rows = mysqli_num_rows($upcoming_res);
?>
<html>
    <head>
        <style>
            body{
                background: black;
                color: white;
            }
            p{
                color: aliceblue;
            }
        </style>
    </head>
    <body>

<?php
    while($data = mysqli_fetch_assoc($movie_res)){     
?>

      <a href="viewpost.php?id=<?php echo $data['id']; ?>">
        <div class="card" style="width: 200px; text-align:center; float:left; margin:30px;">
          <?php
          echo "<img height='290px' width='220px' src='./thumb/" . $data['image'] . "'>";
          ?>
          <div class="container">
              <p><?php echo $data['movie_name']; ?></p>
          </div>
        </div>
      </a>
    <?php
    }
    ?>

    <?php
  while($data = mysqli_fetch_assoc($upcoming_res)){     
?>
      <a href="viewupcomingpost.php?id=<?php echo $data['id']; ?>">
        <div class="card" style="width: 200px; text-align:center; float:left; margin: 30px;">
          <?php
          echo "<img height='290px' width='220px' src='./thumb/" . $data['image'] . "'>";
          ?>
          <div class="container">
              <p><?php echo $data['movie_name']; ?></p>
          </div>
        </div>
      </a>
    <?php
    }
    ?>
    </body>
    </html>
