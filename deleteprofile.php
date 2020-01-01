<?php session_start() ?>


<?php
$conn = mysqli_connect("localhost","root","","addressbook");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM registration WHERE  uid='".$_SESSION['uid']."' and uid='".$_REQUEST['id']."' ";

if ($conn->query($sql) === TRUE) {

  echo '<script type="text/javascript">';
  echo 'alert("Profile deleted successfully");';
  echo 'window.location.href = "loginpage.php";';
  echo '</script>';
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
