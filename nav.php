<?php
@include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">    
    <head>
        <meta charset="UTF-8">
        <title>Movie Information Site</title>
        <meta name="viewport" content="device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <nav>
            <label1 class="logo">Movie Information Site</label1>
                    <ul>
                        <li>
                            <form action="searchResult.php" >
                                <input type="search" placeholder="Search Movie" name="searchText">
                            </form>
                        </li>
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="#">Categories</i> </a>
                            <ul class="dropdown">
                                <?php
                                $category_sql = "SELECT * FROM category";
                                $fetch_category = mysqli_query($conn, $category_sql);
                                while($data = mysqli_fetch_assoc($fetch_category)){ ?>
                                    <li><a href="categorywisepost.php?id=<?php echo $data['id'] ?>"><?php echo $data['category_name']?></a></li>
                                    <?php } ?>
                            </ul>
                        </li> 
                    </ul>
        </nav>
    </body>
</html>