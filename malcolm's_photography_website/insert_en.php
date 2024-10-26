<!--db handling for enquaries.php-->
<?php 
    if(isset($_POST["userEmail"])){

        $userid = $_POST["userid"];
        $email = $_POST["userEmail"];
        $telno = $_POST["TelNo"];
        $date = $_POST["jobDate"];
        $time = $_POST["jobTime"];
        $location = $_POST["jobLocation"];

        $sever_name = "localhost";
        $db_uname = "root";
        $db_pass = "";
        $db_name = "malcolm_db";
        

        $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            $sqlSearch = "SELECT * FROM `enquaries_table` WHERE `job_date` = '$date';";

            $result = $conn->query($sqlSearch); // execute and get results to a var

            if($result->num_rows > 0){ // check num of rows
                // Construct the URL with query parameters
                $redirectUrl = 'enquaries.php?userid=' . urlencode($userid);

                echo"<script>window.location.href='$redirectUrl';alert('The date you selected is unavailable!');</script>";
            }
            else{

                //insert quari join keyword ()
                $sql = "INSERT INTO enquaries_table (user_id, user_email, user_tel, job_date, job_time, job_location) 
                SELECT logintable.user_id, '$email', '$telno', '$date', '$time', '$location' 
                FROM logintable WHERE logintable.user_id = '$userid';";

                if ($conn->query($sql) === TRUE) {                    
                    // Construct the URL with query parameters
                    $redirectUrl = 'enquaries.php?userid=' . urlencode($userid);

                    echo"<script>window.location.href='$redirectUrl';alert('Enquary Created Successfully!');</script>";
                    exit;    
                    
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            }
        }
    }else{
        echo"userid : $userid";
    }
?>