<!--db handling for accepting enquaries-->
<?php 
    if(isset($_POST["enqIDtoAccept"])){

        $enqID = $_POST["enqIDtoAccept"];

        $sever_name = "localhost";
        $db_uname = "root";
        $db_pass = "";
        $db_name = "malcolm_db";
        

        $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {

            //insert quari join keyword
            $sql = "UPDATE `enquaries_table` SET `enq_accepted`='1' WHERE `enq_id`='$enqID'";

            if ($conn->query($sql) === TRUE) {
                
                header('Location: admin_dashboard.php');
                exit;    
                
                //echo"<script>alert('Your Name : $username');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }else{
        echo"Username : $username";
    }
?>