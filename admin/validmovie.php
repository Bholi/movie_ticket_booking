<?php
@include 'config.php';

if(isset($_POST['submit'])){
    
    $mv_name = $_POST['movie_name'];
    $production = $_POST['production'];
    $genre = $_POST['genre'];
    $imdb = $_POST['imdb'];
    $platform = $_POST['platform'];
    $mv_date = date('Y-m-d', strtotime($_POST['movie_date']));
    $mv_lang = $_POST['lang'];
    $mv_direct = $_POST['director'];
    $mv_desc = $_POST['movie_desc'];
    $c_id = $_POST['category'];
    $mv_trailer = $_POST['trailer'];
    $target =  "../thumb/".basename($_FILES['img']['name']);
    $img = $_FILES['img']['name'];
    if(move_uploaded_file($_FILES['img']['tmp_name'],$target)){
  
    $query = "INSERT INTO movie(movie_name, production, genre, imdb, platform, date, language, director, movie_desc, image,category_id,trailer) VALUES ('$mv_name','$production','$genre','$imdb','$platform','$mv_date','$mv_lang','$mv_direct','$mv_desc','$img','$c_id','$mv_trailer')";

    $run = mysqli_query($conn,$query) or die('Error');
    if($run){
        // echo "Movie Uploaded";
        header("location:index.php");
    }else{
        echo "Something wrong";
    }
}
}
else{
    echo "file cannot be uploded";
}
?>
