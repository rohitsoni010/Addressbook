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


$sql = "DELETE FROM contact WHERE  uid='".$_SESSION['uid']."' and rid='".$_REQUEST['id']."' ";

if ($conn->query($sql) === TRUE) {

  echo '<script type="text/javascript">';
  echo 'alert("Record deleted successfully");';
  echo 'window.location.href = "contact.php";';
  echo '</script>';
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
