<?php 
    if(isset($_POST["txtFeedback"])){
      $sever_name = "localhost";
      $db_uname = "root";
      $db_pass = "";
      $db_name = "malcolm_db";

      $userid = $_POST["userid"];
      $ftext = $_POST["txtFeedback"];

      $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);
    
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      } else {

          //insert quari  keyword
          $sql = "INSERT INTO `feedback_table`(`user_id`, `f_text`) SELECT logintable.user_id, '$ftext'
          FROM logintable WHERE logintable.user_id = '$userid';";

          if ($conn->query($sql) === TRUE) {
            
            echo"<script>window.location.href='index.php';alert('Feedback Created Success!');</script>";
            //header('Location: index.php');
            exit;    
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }else{
        echo"error";
    }
    ?>