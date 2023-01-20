<?php
@include 'db.php';
@include 'nav.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from booking where id =$id" or die('error');
    $run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($run)){
        ?>
    <html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylepost.css">
	<style>
		 .btn2 {
 background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 35px;
  text-align: center;
  text-decoration: none;
  transition-duration: 0.4s;
  cursor: pointer;
 
}
.btn_2 {
  background-color: white; 
  color: black; 
  font-weight: bolder;
  border: 2px solid crimson;
}
.btn_2:hover {
  background-color: #9C27B0;
  color: white;
}
	</style>
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
				<header><?php echo $row['name'];?><i>(<?php echo $row['date'];?>)</i></header>

				<p><?php echo $row['description'];?></p>
				<table>
					<tr>
						<th>Movie Name:</th>
						<td><?php echo $row['name'];?></td>
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
						<br>
						<tr>
							<td><div><a href="#" data-inline="true"><button class="btn2 btn_2">Book Now</button></a></div>
   </td>
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