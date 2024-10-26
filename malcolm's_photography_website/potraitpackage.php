<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Malcolm Lismore Photography</title>
</head>
<body style="background-image: url(https://img.freepik.com/free-photo/old-black-background-grunge-texture-dark-wallpaper-blackboard-chalkboard-room-wall_1258-28312.jpg);">  
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
        <img src="https://fujilove.com/wp-content/uploads/2015/04/Lovegrove-XF14mm-5.jpg" class="img-fluid w-100" alt="err" style="height: 400px;object-fit: cover;">
        <h1>Welcome to Malcoms Potrait packages</h1>
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
    <!--explanation and deatails about wedding package  -->
    <?php getPackData('9'); ?>
    <div class="secondary-container">
             
            <img src="https://bidunart.com/wp-content/uploads/2019/12/Portrait183a-1024x683.jpg" class="wed1">
            <p class="wedh2p">
              The Basic Portrait Session is perfect for those seeking professional-quality portraits 
              without any frills. It's ideal for individuals looking for a simple, yet polished portrait. <br><br>
              
              Package Details:<br><br>
                Duration: 1-hour session<br>
                Location: Studio or one outdoor location<br>
                Outfit Changes: One outfit<br>
                Number of Poses: Up to 5 poses<br>
                Edited Images: 5 high-resolution edited images<br>
                Online Gallery: Private gallery for image selection<br>
                Print Release: Permission to print and share images<br>
                Additional Options: Extra edited images available for purchase<br>
            </p>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN_bk0xOFH5vXIjQOpjfAl-k7x9a5o4gXiC8LaDFnB22aDAqK4eVXI7IGfpn_mwymURgg&usqp=CAU" class="wed1">
    </div>
        <br>
        <?php getPackData('10'); ?>
        <div class="secondary-container">
             <img src="https://images.squarespace-cdn.com/content/v1/55472d0ee4b0ac8a00c8a29b/1577059720237-048MIF5V2KDEK9M7109A/hawkes-bay-studio-portrait-photographers" class="wed1">
            <p class="wedh2p">
              The Family Portrait Package is tailored for families looking to capture their 
              unique bonds and connections in a relaxed and natural setting. <br><br>
              Package Details: <br><br>
                Duration: 2-hour session <br>
                Location: Outdoor location of your choice<br>
                Outfit Changes: Multiple outfit changes<br>
                Number of Poses: Candid and posed shots<br>
                Edited Images: 15 high-resolution edited images<br>
                Online Gallery: Private gallery for image selection<br>
                Print Release: Permission to print and share images<br>
                Family Keepsake: One 8x10 print included<br>
            </p>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRehgKqrnEg7BKw-oT3q_xGao79qYATRJNcynXKl-MFw1AB8dtyZW2igw0N9VNJ_c-dzGY&usqp=CAU" class="wed1">
        </div>
        <?php getPackData('11'); ?>
        <div class="secondary-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcv7YXZAVFAH3HCusau_-Kx9hgoyBTVX4V0A&usqp=CAU" class="wed1">
            <p class="wedh2p">
              The Headshot and Professional Branding package is tailored for individuals and professionals 
              seeking high-quality headshots for their personal branding, websites, and LinkedIn profiles. <br><br>
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
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2aY6buhmkudvhoCcjE_-3vZ0w0EW1q6t2eeVZf0Mum8DtlMnyPNl_iczDS8ub9Uylcis&usqp=CAU" class="wed1">
        </div>
        <?php getPackData('12'); ?>
        <div class="secondary-container">
        <p style="font-size: large;" class="wedh2p">
          The Portrait Experience package is for those who want an all-inclusive, luxurious portrait 
          session that offers a wide range of options and a truly immersive photography experience.<br><br>
          Package Details: <br><br>
            Duration: Half-day session (up to 4 hours)<br>
            Location: Multiple locations, including studio and outdoor<br>
            Outfit Changes: Unlimited outfit changes<br>
            Number of Poses: Extensive variety of poses<br>
            Edited Images: 30 high-resolution edited images<br>
            Online Gallery: Private gallery for image selection<br>
            Print Release: Permission to print and share images<br>
            Hair and Makeup: Professional hair and makeup artist included<br>
            Wardrobe Styling: Consultation and guidance for outfit selection<br>
            Luxury Album: Custom-designed 12x12-inch photo album<br>
        </p>
        <img src="https://cloudfront.slrlounge.com/wp-content/uploads/2021/04/4-rokinon-canon-mirrorless-lenses-750x500.jpg" style="width: 1000px; height: 300px; border-radius: 10px;">
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