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
    <!--signup form-->
    <form action="sign_up.php" method="post">
        <div class="flex-centered" style="height: 80vh;">
            <div class="w-50 login-container">
                <h1 style="text-align: center;margin: 0%;">Sign Up</h1>
                <div class="mb-3 ">
                    <label for="txtUser" class="form-label ">User Name</label>
                    <input type="text" class="form-control " id="txtUser" name="txtUser">
                </div>
                <div class="mb-3">
                    <label for="txtPassword" class="form-label">Password</label>
                    <input type="password" id="txtPassword" name="txtPassword" class="form-control" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-10 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>        
                </div>
                <button class="btn btn-success w-100" onclick="return verifyUserLogin()">Sign Up</button>
            </div>
        </div>
    </form>
    <?php 
    if(isset($_POST["txtUser"])){

        $unm = $_POST["txtUser"];
        $upass = $_POST["txtPassword"];

        $sever_name = "localhost";
        $db_uname = "root";
        $db_pass = "";
        $db_name = "malcolm_db";
        

        $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {


            $sql = "INSERT INTO `logintable`( `user_name`, `user_psw`) VALUES ('$unm','$upass')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>window.location.href='cus-login.php';alert('Account Creation Successfull! You can now Login!');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }
    ?>
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
<!--account verification-->
<script>
    function verifyUserLogin(){
        const txtPassword = document.getElementById('txtPassword');

        if(txtPassword.value.length > 10){
            alert("Your Password must be 10 characters or lower!");
            return false;
        }else{return true;}
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>