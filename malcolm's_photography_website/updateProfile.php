<!--db handling for accepting enquaries-->
<?php 
    if(isset($_POST["txtUser"])){

        $username = $_POST["txtUser"];
        $password = $_POST["txtPassword"];
        $adminID = $_POST["adminID"];

        $sever_name = "localhost";
        $db_uname = "root";
        $db_pass = "";
        $db_name = "malcolm_db";
        

        $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {

            //insert quari join keyword
            $sql = "UPDATE `admin_table` SET `user_name`='$username',`user_psw`='$password' WHERE `user_id`='$adminID'";

            if ($conn->query($sql) === TRUE) {
                
                echo "<script>window.location.href='admin_dashboard.php?adminid=$adminID';alert('Account Updated Successfully!');</script>";
                //header('Location: admin_dashboard.php');
                exit;    
                
                //echo"<script>alert('Your Name : $username');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }else{
        echo"Error";
    }
?>