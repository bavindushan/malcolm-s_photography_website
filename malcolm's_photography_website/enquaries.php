<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Malcolm Lismore Photography</title>
</head>
<body class="login-body">
    <!--Username Retreival-->
    <?php 
        $userid = $_GET['userid'];
    ?>
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
    <form action="insert_en.php" method="post"  enctype="multipart/form-data">
        <div class="" style="display:flex;justify-content:center;">
            <div class="w-50 login-container">
                <h1 style="text-align: center;margin: 0%;">Submit Enquaries</h1>
                <?php 
                    echo"<input type='hidden' name='userid' value='$userid'>";
                ?>
                <div class="mb-3">
                    <label for="userEmail" class="form-label">E mail</label>
                    <input type="email" name="userEmail" id="userEmail" class="form-control" placeholder="Enter Email">                  
                </div>
                <div class="mb-3">
                    <label for="TelNo" class="form-label">Contact Number</label>
                    <input type="text" name="TelNo" id="TelNo" class="form-control" placeholder="Tel No">                  
                </div>
                <div class="mb-3">
                    <label for="jobDate" class="form-label">Date</label>
                    <input type="date" name="jobDate" id="jobDate" class="form-control">                  
                </div>
                <div class="mb-3">
                    <label for="jobTime" class="form-label">Time</label>
                    <input type="text" name="jobTime" id="jobTime" class="form-control" placeholder="00am - 12pm">                  
                </div>
                <div class="mb-3">
                    <label for="jobLocation" class="form-label">Location</label>
                    <input type="text" name="jobLocation" id="jobLocation" class="form-control" placeholder="Google Maps URL">                  
                </div>
                <div class="mb-3">
                  <iframe class = 'googleMap' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.728169187858!2d79.8259820870519!3d6.928556345682496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593b09364c4f%3A0x7dc13fa1f24d5c16!2sShangri-La%20Colombo!5e0!3m2!1sen!2slk!4v1698145453324!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
                </div>
                <button class="btn btn-success w-100" type="submit">Submit</button>
            </div>
        </div>
    </form>
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