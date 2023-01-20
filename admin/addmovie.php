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
    <title>Register Page</title>
    <style>
        .container{
    margin: 20px 200px 0 250px;
    background: #eee;
    border-radius: 20px;
    padding: 20px;
}
        .container form input{
            margin: 10px;
            width: 100%;
            padding: 10px;
        }
        .btn {
            background-color: #4CAF50; 
            color: white;
        }
        .btn1 {
            background-color: white; 
            color: black; 
            border: 2px solid crimson;
        }
        .btn1:hover {
            background-color: #9C27B0;
            color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="validmovie.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="movie_name" placeholder="Enter Movie Name"><br>
            <input type="text" name="production" placeholder="Enter production company name"><br>
            <input type="text" name="genre" placeholder="Enter Genre"><br>
            <input type="text" name="imdb" placeholder="Enter IMDB Rating"><br>
            <input type="text" name="platform" placeholder="Enter Platform"><br>
            <input type="date" name="movie_date" placeholder="Enter release date"><br>
            <input type="text" name="lang" placeholder="Enter movie language"><br>
            <input type="text" name="director" placeholder="Enter director name"><br>
            <textarea type="text" name="movie_desc" placeholder="Enter movie description"></textarea><br>
            <input type="file" name="img" placeholder="Thumbnail"><br>
            Choose Category:
            <select name="category">
                <?php 
               $query = "select * from category" or die('error');
               $run = mysqli_query($conn,$query);
               while ($row=mysqli_fetch_assoc($run)){
                    
                ?>
                <option value="<?php echo $row['id'];?> ">
                   <?php echo $row['category_name'];?>
                </option>
                <?php
               } 
                ?>
            </select><br>
            <input type="text" name="trailer" placeholder="Enter trailer code">
            <br><br>
            <input type="submit" class="btn btn1" name="submit" value="Add Movie">
        </form>
    </div>
</body>
</html>