<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="./image/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item" id="registerCont">
                    <a class="log-link" class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item" id="loginCont">
                    <a class="log-link" class="nav-link" href="#" id="login">Login</a>
                </li>
               
            </ul>
        </div>
    </nav>
<!-- end nav -->

<!-- startimage -->
<div class="slider-container">
        <div class="slider">
            <img src="./image/image.jpg" alt="Image 1">
        </div>
    </div>
<!-- end image  -->
<!-- start input -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="input" enctype="multipart/form-data">
    <h2>ADD HERE</h2>
<label for="box_name">product Name:</label> <br>
<input type="text" name="box_name" id="box_name"><br> <br>

<label for="description">Description:</label> <br>
<textarea name="description" id="description"></textarea><br> <br>

<label for="number">Number:</label> <br>
<input type="number" name="number" id="number"><br>

<label for="image">Image:</label> <br>
<input type="file" name="image" id="image" accept="image/*"><br> <br>

<input type="submit" value="Add">
</form>
<!-- end input -->
<!-- startphp input -->
<?php
session_start();
if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    
    $box_name = $_POST['box_name'];
    $description = $_POST['description'];
    $number = $_POST['number'];
  
    // $productimage = $_FILES['image'];
    // $imagepath = 'upload' . $productimage['name'];
    // move_uploaded_file ($productimage['tmp_name'], $imagepath);

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $image_path = $target_file;

    $box_data = array (
        "name" => $box_name,
        "description" => $description,
        "number" => $number,
        "image" => $image_path,
      
    );
    $check = true;
                foreach ($_SESSION["data"] as $value) {
                    if ($_POST['box_name'] === $value["name"] && $_POST['description'] === $value['description']  && $_POST['number'] === $value['number']) {
                        $check = false;
                    }

                }
                if ($check) {
                    $_SESSION['data'][]= $box_data;
                }
    
}
?>
<!-- endphp input -->
<!-- start table -->
<table>
<thead>
    <tr>
        <th>product Name</th>
        <th>Description</th>
        <th>Number</th>
        <th>Image</th>
    </tr>
</thead>
<tbody>
    <!-- start php table -->
<?php
if (isset($_SESSION["data"])) {
foreach ($_SESSION ["data"] as $box_data) {
    echo "<tr>";
    echo "<td>" . $box_data["name"] . "</td>";
    echo "<td>" . $box_data["description"] . "</td>";
    echo "<td>" . $box_data["number"] . "</td>";
    echo "<td> <img src=".$box_data["image"]." >  </td>";
    echo "</tr>";
    
}
}

?>
<!-- end php table -->
</tbody>

</table>




<!-- startfooter -->
<footer>
    <div class="foot">
        <div class="image-card">
            <img src="./image/logo.png" alt="Card Image">
        </div>

        <div class="card">
            <h2>LINKS</h2>
            <p class="paragraph"><a href="#">Home</a></p>
            <p class="paragraph"><a href="#">Sign Up</a></p>
            <p class="paragraph"><a href="#">Sign In</a></p>
        </div>
        <div class="card">
            <h2>Contact Us</h2>
            <p>mohammad.asad0101@gmail.com</p>
            <p>+962795120790</p>
        </div>

    </div>
    <p class="copy">Copyright &copy; 2023 by <span>MOHAMMAD AS'AD</span> | All Right Reserved</p>
</footer>
<!-- end footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>