<!--db handling for package updating-->
<?php 
    if(isset($_POST["txtPackName"])){

        $PackName = $_POST["txtPackName"];
        $PackPrice = $_POST["txtPackPrice"];
        $packID = $_POST["packID"];

        $sever_name = "localhost";
        $db_uname = "root";
        $db_pass = "";
        $db_name = "malcolm_db";
        

        $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {

            //insert quari join keyword
            $sql = "UPDATE `packages_table` SET `pack_Name`='$PackName',`pack_Price`='$PackPrice' WHERE `pack_id`='$packID'";

            if ($conn->query($sql) === TRUE) {
                
                echo "<script>window.location.href='admin_dashboard.php';alert('Package Updated Successfully!');</script>";
                //header('Location: admin_dashboard.php');
                exit;    
                
                //echo"<script>alert('Your Name : $PackName');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }else{
        echo"Error";
    }
?>