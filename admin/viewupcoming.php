<?php
@include 'nav.php';
@include 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from upcoming where id =$id" or die('error');
    $run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($run)){
        ?>
    <html>
        <head>
            <style>
                .img{
                    text-align: center;
                    margin-top: 40px;
                }
                .des{
                    text-align: center;
                    margin-top: 40px;
                    
                }
                .des p{
                    padding: 10px;
                    font-size: 15px;
                    
                }
                
            </style>
        </head>
        <body>
        <div class="container">
        <div class="img">
        <?php echo "<img height='400px' width='400px' src='../thumb/".$row['image']."'>";?>
    </div> 
    
    <div class="des">
        <p><b>Movie Name:</b> <?php echo $row['movie_name'];?> </p>
        <p><b>Production:</b> <?php echo $row['production'];?> </p>
        <p><b>Genre:</b> <?php echo $row['genre'];?></p>
        <p><b>IMDB Rating: </b><?php echo $row['imdb'];?></p>
        <p><b>Platform:</b> <?php echo $row['platform'];?></p>
        <p><b>Release Date:</b> <?php echo $row['date'];?></p>
        <p><b>Language:</b> <?php echo $row['language'];?></p>
        <p><b>Director:</b> <?php echo $row['director'];?></p>
        <p><b>Storyline:</b> <?php echo $row['movie_desc'];?></p>
    </div>
               
        </body>
    </html>
    
<?php
    }
}
?>