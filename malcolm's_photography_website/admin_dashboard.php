<?php
  session_start();
  if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])){
    header('Location: admin-login.php'); // if session invalid
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Malcolm Lismore Photography</title>
</head>
<body>
  <?php
    $adminID = $_GET["adminid"];
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
                        <a class="nav-link active" aria-current="page" onclick="alert('Please Logout First !');">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" onclick="alert('Please Logout First !');" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Accounts
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" onclick="alert('Please Logout First !');">Admin Login</a></li>
                        <li><a class="dropdown-item" onclick="alert('Please Logout First !');">Customer Login</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" onclick="alert('Please Logout First !');">Sign up</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" onclick="alert('Please Logout First !');">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" onclick="alert('Please Logout First !');">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                  </ul>
              </div>
          </div>
      </div>
  </nav>
  <!--dashbord content-->
    <div class="accordion" id="accordionExample" style="margin-bottom:35px;">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <img src="https://cdn-icons-png.flaticon.com/128/768/768818.png" class="acordian-image" alt="">
          Cheak Enquaries
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <table class="table w-100">
              <thead>
                  <tr>
                  <td>enq ID</td>
                  <td>user ID</td>
                  <td>Email</td>
                  <td>Tel No</td>
                  <td>Date</td>
                  <td>Time</td>
                  <td>Location</td>
                  <td>Status</td>
                  <td colspan="2" style="text-align:center;">Controls</td>
                  </tr>
              </thead>

              <!--accept and delete button php part-->
              <?php 
                $sever_name = "localhost";
                $db_uname = "root";
                $db_pass = "";
                $db_name = "malcolm_db";
            
            
                #DB connection srting
                $conn = mysqli_connect($sever_name, $db_uname,$db_pass,$db_name);
            
                if (!$conn){
                    die("Connection failed: " . mysqli_connect_error());
                }else{
            
                  $sql = "SELECT * FROM `enquaries_table`";
          
                  $result = $conn->query($sql);
          
                  if($result->num_rows > 0){
          
                      while($row = $result->fetch_assoc()){

                        $status;
                        $enqID = $row["enq_id"];
                        $email = $row['user_email'];

                        if($row["enq_accepted"] == 0){
                          $status = "Unaccepted";
                        }else{
                          $status = "Accepted";
                        }

                        echo"<tr>";
                        echo"<td>".$row["enq_id"]."</td>";
                        echo"<td>".$row["user_id"]."</td>";
                        echo"<td><a href = 'mailto:$email'>$email</a></td>";
                        echo"<td>".$row["user_tel"]."</td>";
                        echo"<td>".$row["job_date"]."</td>";
                        echo"<td>".$row["job_time"]."</td>";
                        echo"<td><a href='".$row["job_location"]."'>URL</a></td>";
                        echo"<td>$status</td>";
                        echo"
                        <td>
                          <form action='accept_enq.php' method='POST'>
                            <input type='hidden' name='enqIDtoAccept' value='$enqID'>
                            <button class='btn btn-success' type='submit'>Accept</button>
                          </form>
                        </td>
                        <td>
                          <form action='delete_enq.php' method='POST'>
                            <input type='hidden' name='enqIDtoDelete' value='$enqID'>
                            <button class='btn btn-danger' type='submit'>Delete</button>
                          </form>
                        </td>      
                        ";
                        echo"</tr>";
                      }
                    }
                  }
              ?>
          </table>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <img src="https://cdn-icons-png.flaticon.com/128/3097/3097412.png" class="acordian-image" alt="">  
        Upload Images
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <form action="upload_images.php" method="post"  enctype ="multipart/form-data"  style="display:flex;flex-wrap:wrap;justify-content:space-evenly;height:200px;">
            <input type="file" name="ppic" id="ppic" class="w-50"  style="height:30%;">
            <select name="imgType" id="imgType" class="form-control w-50" style="height:30%;">
              <option value="landscape">Landscape</option>
              <option value="wildlife">Wildlife</option>
              <option value="birds">Birds</option>
            </select>
            <button class="btn btn-success w-100" type="submit" style="margin:0px 300px;height:20%;">Upload</button>
          </form>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <img src="https://cdn-icons-png.flaticon.com/128/1214/1214428.png" class="acordian-image" alt="">  
        Delete Images
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div style="display:flex;">
          <form action="delete_images.php" method="post" class="w-100">
            <select name="imgSelect" id="imgSelect" class="form-control" style="width:50%;margin-right:20px;">
                <option value="0">-- Select Image to Delete --</option>
                <?php 
                  if (!$conn){
                    die("Connection failed: " . mysqli_connect_error());
                  }else{
              
                    $sql = "SELECT * FROM `gallery_table`";
            
                    $result = $conn->query($sql);
            
                    if($result->num_rows > 0){
            
                        while($row = $result->fetch_assoc()){
                          $imgLocation = $row["img_location"];
                          $imgID = $row["img_id"];
                          echo"<option value ='$imgLocation'>$imgLocation</option>";
                        }
                    }
                  }

                ?>
            </select>
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <img src="https://cdn-icons-png.flaticon.com/128/3524/3524752.png" class="acordian-image" alt="">  
        Profile Settings
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body" style="display:flex;gap:1em;">
        <form action="updateProfile.php" method="post">
          <input type="hidden" name="adminID" value="<?php echo $adminID;?>">
          <input type="text" name="txtUser" id="txtUser" class="form-control" placeholder="Enter your new user name here">
          <input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder="enter your new password here">
          <button class="btn btn-primary">Save</button>
        </form>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPqdSUxmF-ETjW8lwzstU-Ip6GK5eftUcJ5A&usqp=CAU" class="acordian-image" alt="">  
        Package Settings
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body" style="display:flex;gap:1em;">
        <form action="updatePackage.php" method="post">
          <input type="number" name="packID" id="packID">
          <input type="text" name="txtPackName" id="txtPackName" class="form-control" placeholder="Enter your new package name here">
          <input type="text" name="txtPackPrice" id="txtPackPrice" class="form-control" placeholder="enter your new package price here">
          <button class="btn btn-primary">Save</button>
        </form>
        </div>
      </div>
    </div>
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