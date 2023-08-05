<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index2.css">
</head>
<body>
    <!-- startnav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="./image/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            
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
    <!-- endnav -->

    <!-- startimage -->
    <div class="slider-container">
        <div class="slider">
            <img src="./image/image.jpg" alt="Image 1">
        </div>
    </div>
    <!-- endimage -->
    <!-- startcard -->
    <div class="cards-container">
       <?php
       session_start ();
if (isset($_SESSION["data"]) && !empty($_SESSION["data"])) {
foreach ($_SESSION["data"] as $box_data) {
    echo "<div class='cont'>".
    "<div class='imag-card'>".
      "<img width='200px' height='200px' class='image'. src=".$box_data["image"].">".
     " </div>".
     "  <div class='card-content'>".
  "  <div class='brand'>".
     "<p>Brand :".$box_data["name"]."</p>".
     " </div>".
      "<div class='description'>".
    "<p>" . $box_data["description"]."</p>".
   "  </div>".
     " <div class='price'>".
     " <p> price :$ ".$box_data["number"]."</p>".
   " </div>".
  " <div class='button'>".
     " <button> ADD TO CART </button>".
   " </div>".
   "  </div>".
    "</div>";
           }}

       ?>
    </div>
    <!-- end card -->
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
    <!-- endfooter -->
</body>
</html>