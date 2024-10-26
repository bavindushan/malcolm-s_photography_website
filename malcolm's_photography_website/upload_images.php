<!--db handeling for uplod images-->
<?php 
$sever_name = "localhost";
$db_uname = "root";
$db_pass = "";
$db_name = "malcolm_db";

$imgType = $_POST["imgType"];

$conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

// Check if file was uploaded without errors
if (isset($_FILES["ppic"]) && $_FILES["ppic"]["error"] == 0) {
    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "jfif" => "image/jfif");
    $filename = $_FILES["ppic"]["name"];
    $filetype = $_FILES["ppic"]["type"];
    $filesize = $_FILES["ppic"]["size"];

    // Verify file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

    // Verify file size - 5MB maximum
    $maxsize = 5 * 1024 * 1024;
    if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

    // Verify MYME type of the file
    if (in_array($filetype, $allowed)) {
        // Check whether file exists before uploading it
        if (file_exists("pic/" . $filename)) {
            echo $filename . " is already exists.";
        } else {
            move_uploaded_file($_FILES["ppic"]["tmp_name"], "pic/" . $filename);
            $propic1 = "pic/" . $filename;

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else {

            //recod insert part
                $sql = "INSERT INTO `gallery_table`(`img_location`, `img_type`) VALUES ('$propic1','$imgType')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script>window.location.href='admin_dashboard.php';alert('New Image added successfully');</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            }
        }

        }
    } else {
        echo "Error: There was a problem uploading your file. Please try again.";
    }

?>