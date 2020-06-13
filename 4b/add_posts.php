<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Tambah Post</title>
  </head>
  <body>
      <div class="container col-md-4 mt-4">
          <h1>Tambah Post</h1>
          <form action="add_posts.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title">
              </div>
              <div class="form-group">
                  <label>Deskripsi</label>
                  <input type="text" class="form-control" name="deskripsi">
              </div>
              <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" name="image">
              </div>
              <input type="submit" class="btn btn-primary" name="Submit" value="Add">
          </form>
      </div>
    
      <?php
        $msg = "";
        if(isset($_POST['Submit'])) {
            include_once("config.php");
            $title = $_POST['title'];
            $image = $_FILES['image']['name'];
            $deskripsi = $_POST['deskripsi'];

            // image file directory
            $target = "images/".basename($image);

            $result = mysqli_query($mysqli, "INSERT INTO posts (title, image, deskripsi, User_id) VALUES ('$title', '$image', '$deskripsi', 1)");

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
    ?>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>