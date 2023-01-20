<?php
@include 'db.php';
// $query = "SELECT * FROM movie inner join category on movie.category_id = category.id";
// $query = "SELECT * FROM `movie`";
// $run = mysqli_query($conn,$query) or die('error');
// print_r(mysqli_fetch_assoc($run));
@include 'nav.php';
@include 'booking.php';
@include 'upcoming.php';
@include 'recentlyadded.php';

?>         