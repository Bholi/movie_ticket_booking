<?php
@include 'db.php';
@include 'nav.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from movie where category_id =$id" or die('error');
    $run = mysqli_query($conn,$query);
}
?>

<!DOCTYPE html>
<html lang="en">    
    <head>
        <meta charset="UTF-8">
        <title>Movie Information Site</title>
        <meta name="viewport" content="device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="upcoming.css">
        
    </head>
    <body>
        <?php
        $category_sql = "SELECT * FROM category where id = $id";
        $fetch_category = mysqli_query($conn, $category_sql);                   
        while($data = mysqli_fetch_assoc($fetch_category)){ ?>
        <h2><?php echo $data['category_name']?></h2>
        <?php } ?>
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

    </body>
</html>         