<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM posts ORDER BY id DESC");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
      <div class="container mt-4">
        <a class="btn btn-primary mb-4" href="add.php" role="button">Tambah User</a>
        <a class="btn btn-primary mb-4" href="add_posts.php" role="button">Tambah Post</a>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <?php  
                while($user_data = mysqli_fetch_array($result)) { 
                    echo "<div class='col-md-4'>";
                    echo "<img src='images/".$user_data['image']."' class='card-img'>";
                    echo "</div>";
                    echo "<div class='col-md-8'>";
                    echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>".$user_data['title']."</h5>";
                        echo "<p class='card-text'>".$user_data['deskripsi']."</p>";
                        echo "<a href='detail.php?page-detail&id".$user_data['id']."'>Lihat</a>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>