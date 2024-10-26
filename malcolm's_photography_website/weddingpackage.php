<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Malcolm Lismore Photography</title>
</head>
<body class="wedbody">  
  <!--add nev bar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
          <div class="logo">
            <img src="images/navlogo.png" alt="" class="navlogo">
            <a class="navbar-brand" href="#">Malcolm Lismore Photography</a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="links">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Accounts
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="admin-login.php">Admin Login</a></li>
                        <li><a class="dropdown-item" href="cus-login.php">Customer Login</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="sign_up.php">Sign up</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="aboutus.html">About Us</a>
                    </li>
                  </ul>
              </div>
          </div>
      </div>
  </nav>
    <!--add image and Tital-->
    <div class="hero-image-container">
        <img src="images/wedding13.jpg" class="img-fluid w-100" alt="err" style="height: 400px;object-fit: cover;">
        <h1>Welcome to Malcoms Wedding package</h1>
    </div>
    <?php 
    function getPackData($myID){
      $sever_name = "localhost";
      $db_uname = "root";
      $db_pass = "";
      $db_name = "malcolm_db";
    
      $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

      $sql = "SELECT * FROM `packages_table` WHERE `pack_id` = '$myID';";

      $result = $conn->query($sql);

      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $packName = $row["pack_Name"];
          $packPrice = $row["pack_Price"];

          echo"<h2 class='wedh2'>$packName ($$packPrice)</h2>";
        }
      }
      $conn->close();
    }
    ?>
    <!--explanation and deatails about wedding package-->
    <?php getPackData('1') ?>
    <div class="secondary-container">
             
            <img src="images/wedding4.jpg" class="wed1">
            <p class="wedh2p">2 Professional Photographers Upto 11 Hours of Exclusive 
            Coverage 17x24 or 12x36 Album 40 Spreds 8x24 Family Album 10 Spreads 16x24 Framed 		
            Enlargemenets x 2 500 Edited Images on USB FREE All evenet images on USB
            </p>
            <img src="images/weedding6.jpg" class="wed1">
    </div>
        <br>
        <?php getPackData('2') ?>
        <div class="secondary-container">
             <img src="images/wedding7.jpg" class="wed1">
            <p class="wedh2p">
              5 hours engagement photo session.onl photography up to 5 hours of exclusive coverage 
              up to 150 edited images on dvd <br><br>
              Package Details: <br><br>
                Duration: 1-hour session<br>
                Location: Studio or on-site at your workplace<br>
                Outfit Changes: Up to 2 outfit changes<br>
                Number of Poses: Multiple headshot variations<br>
                Edited Images: 10 high-resolution edited images<br>
                Online Gallery: Private gallery for image selection<br>
                Print Release: Permission to print and share images<br>
                Image Cropping: Custom cropping for social media profiles<br>
            </p>
            <img src="images/wedding8.jpg" class="wed1">
        </div>
        <?php getPackData('3') ?>
        <div class="secondary-container">
            <img src="https://www.markjayphotography.com/wp-content/uploads/2018/02/0063__MJF1597-Edit.jpg" class="wed1">
            <p class="wedh2p">Four hours of coverage 200 custom edited 
              images Online gallery hosting One 30 page (15 spreads)8"x24" Custom Art album <br> <br>
              Package Details: <br><br>
                Duration: 4-hour session<br>
                Location: Studio or on-site at your workplace<br>
                Outfit Changes: Up to 3 outfit changes<br>
                Edited Images: 10 high-resolution edited images<br>
                Online Gallery: Private gallery for image selection<br>
                Print Release: Permission to print and share images<br>
                Image Cropping: Custom cropping for social media profiles<br>
            </p>
            <img src="images/wedding10.jpg" class="wed1">
        </div>
        <?php getPackData('4') ?>
        <div class="secondary-container">
        <p style="font-size: large;" class="wedh2p">
          200 edited images on a storage device All unedited images on a storage 
          device Up to 7 hours of exclusive photography coverage<br>
          Package Details: <br><br>
                Duration: 7-hour session<br>
                Location: Studio or on-site at your workplace<br>
                Outfit Changes: Up to 4 outfit changes<br>
                Number of Poses: Multiple headshot variations<br>
                Edited Images: 200 high-resolution edited images<br>
                Online Gallery: Private gallery for image selection<br>
                Print Release: Permission to print and share images<br>
                Image Cropping: Custom cropping for social media profiles<br>
        </p>
        <img src="https://www.brides.com/thmb/cHP04qY2ZYbO87hkZ9KsQtyVOHI=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/affordable-winter-wedding-ideas-small-ceremony-JAMES-X-SCHULZE-e7f5aad275b7485cb3ededb2c5208f5f.jpg" style="width: 1000px; height: 300px; border-radius: 10px;">
        </div>
    <!--footer-->
    <div class="footer bg-body-tertiary"  data-bs-theme="dark">
      <nav class="nav flex-column" style="width:max-content;">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="aboutus.html">About US</a>
        <a class="nav-link" href="contactus.html">Contact Us</a>
      </nav>
      <div class="w-100 social-container">
      <div class="social"></div>
      <div class="social"></div>
      <div class="social"></div>
      </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>