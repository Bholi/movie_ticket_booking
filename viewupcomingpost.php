<?php
@include 'db.php';
@include 'nav.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select * from upcoming where id =$id" or die('error');
    $run = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($run)) {
?>
       <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylepost.css">
</head>
<body>
	<div class="header">
        <iframe width="95%" height="500"
src="https://www.youtube.com/embed/<?php echo $row['trailer'];?>">
    </iframe>
	</div>
	<main>
		<div class="d1"><img <?php echo "src='./thumb/".$row['image']."'>";?>></div>
		<div class="d2">
			<div class="movie-details">
				<header><?php echo $row['movie_name'];?><i>(<?php echo $row['date'];?>)</i></header>

				<p><?php echo $row['movie_desc'];?></p>
				<table>
					<tr>
						<th>Movie Name:</th>
						<td><?php echo $row['movie_name'];?></td>
					</tr>
					<tr>
						<th>Production:</th>
						<td><?php echo $row['production'];?></td>
					</tr>
					<tr>
						<th>Genre:</th>
						<td><?php echo $row['genre'];?></td>
					</tr>
					<tr>
						<th>IMDB Rating:</th>
						<td><?php echo $row['imdb'];?></td>
					</tr>
					<tr>
						<th>Platform:</th>
						<td><?php echo $row['platform'];?></td>
					</tr>
						<tr>
							<th>Release Date:</th>
							<td><?php echo $row['date'];?></td>
						</tr>
						<tr>
							<th>Language:</th>
							<td><?php echo $row['language'];?></td>
						</tr>
						<tr>
							<th>Director:</th>
							<td><?php echo $row['director'];?></td>
						</tr>
			
				</table>
			</div>
		</div>
	</main>
</body>
</html>

<?php
    }
}
?>