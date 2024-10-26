<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Malcolm Lismore Photography</title>
</head>
<body style="background-image: url(https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/video/BgrICs-NZj4hksnn3/videoblocks-abstract-blurred-smoke-in-red-and-blue-colors-over-a-black-background-in-studio-4k-footage_r_etsxvsq_thumbnail-1080_01.png);">  
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
        <img src="images/par.jpg" class="img-fluid w-100" alt="err" style="height: 400px;object-fit: cover;">
        <h1>Welcome to Malcoms Event and Party package</h1>
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
    <?php getPackData('5');?>
    <div class="secondary-container">
             
            <img src="https://www.scopeproductions.com.au/wp-content/uploads/2019/06/event-video-coverage.jpg" class="wed1">
            <p class="wedh2p">
              The Basic Event Coverage package is suitable for small-scale events and gatherings where you want 
              to capture essential moments without elaborate photography services. <br><br>
              
              Package Details: <br><br>

                Coverage Duration: Up to 2 hours<br>
                Event Type: Small parties, birthdays, or casual gatherings<br>
                Number of Photographers: 1 photographer<br>
                Number of Edited Images: 50 high-resolution edited images<br>
                Online Gallery: Private gallery for image selection<br>
                Print Release: Permission to print and share images<br>
            </p>
            <img src="https://img.freepik.com/premium-photo/silhouette-man-covering-event-stage-with-video-camera_35966-48.jpg" class="wed1">
    </div>
        <br>
        <?php getPackData('6');?>
        <div class="secondary-container">
             <img src="https://images.squarespace-cdn.com/content/v1/57477691859fd027d04f341b/1682806634915-AP7CU721IHVZ79JQL7A3/Los+Angeles+Corporate+Event+Photography-10.jpg?format=2500w" class="wed1">
            <p class="wedh2p">
              The Corporate Event Photography package is designed for businesses and organizations hosting
              conferences, seminars, workshops, or corporate parties. <br><br>
              Package Details: <br><br>

                Coverage Duration: Half-day (4 hours) or Full-day (8 hours)<br>
                Event Type: Corporate events, conferences, seminars<br>
                Number of Photographers: 1-2 photographers<br>
                Number of Edited Images: 100 high-resolution edited images (half-day) or 200 images (full-day)<br>
                Online Gallery: Private gallery for image selection<br>
                Print Release: Permission to print and share images<br>
                Event Highlights Album: Custom-designed digital album<br>
            </p>
            <img src="https://www.davidbroadway.com.au/images/porftolio/corporate-events/190921_UDIA_AFE_11.JPG" class="wed1">
        </div>
        <?php getPackData('7');?>
        <div class="secondary-container">
            <img src="https://chicagophotovideo.com/wp-content/uploads/2018/01/professional-special-event-photographer-chicago-il-1024x683.jpg" class="wed1">
            <p class="wedh2p">
              The Special Occasion Event Photography package is designed for couples and individuals 
              celebrating anniversaries and milestone events. <br><br>
              Package Details:<br><br>
                Coverage Duration: Full-day (up to 12 hours)<br>
                Event Type: Weddings, anniversaries, quinceañeras, and other special occasions<br>
                Number of Photographers: 2 photographers<br>
                Engagement Session: Complimentary pre-event engagement session<br>
                Number of Edited Images: 300 high-resolution edited images<br>
                Online Gallery: Private gallery for image selection<br>
                Print Release: Permission to print and share images<br>
                Custom Wedding Album: 12x12-inch custom-designed wedding album<br>
            </p>
            <img src="https://chicagophotovideo.com/wp-content/uploads/2018/01/special-event-photography-of-attendees-enjoying-event-1024x683.jpg" class="wed1">
        </div>
        <?php getPackData('8');?>
        <div class="secondary-container">
        <p style="font-size: large;" class="wedh2p">
          The VIP Event Photography Experience is a premium package for exclusive events, galas, and high-profile
          occasions where exceptional service and attention to detail are paramount.<br><br>
          Package Details: <br><br>

            Coverage Duration: Full-day (up to 12 hours)<br>
            Event Type: Exclusive events, galas, red carpet affairs<br>
            Number of Photographers: 2-3 photographers<br>
            VIP Red Carpet Experience: Red carpet photo sessions for VIP attendees<br>
            Number of Edited Images: 400 high-resolution edited images<br>
            Online Gallery: Private gallery for image selection<br>
            Print Release: Permission to print and share images<br>
            Luxury Event Album: Custom-designed 14x14-inch luxury event album<br>
            On-site Printing: Instant on-site printing for event attendees<br>
        </p>
        <img src="https://media.istockphoto.com/id/882906386/photo/lets-kick-this-party-into-high-gear.jpg?s=612x612&w=0&k=20&c=yjXQzoaqh7ZbuPhGt0-YLaHg2_JA-OGBfB-q6ThDwHw=" style="width: 1000px; height: 300px; border-radius: 10px;">
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