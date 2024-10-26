<!--db handling for deleting enquaries-->
<?php 
    if(isset($_POST["enqIDtoDelete"])){

        $enqID = $_POST["enqIDtoDelete"];

        $sever_name = "localhost";
        $db_uname = "root";
        $db_pass = "";
        $db_name = "malcolm_db";
        

        $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {

            //insert quari join keyword
            $sql = "DELETE FROM `enquaries_table` WHERE `enq_id` = '$enqID'";

            if ($conn->query($sql) === TRUE) {
                
                header('Location: admin_dashboard.php');
                exit; 
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }else{
        echo"Username : $username";
    }
?>