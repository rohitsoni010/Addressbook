<?php
session_start();
?>
<?php

  $connect = mysqli_connect("localhost", "root", "", "addressbook");


  if (isset($_POST['query'])) {

  	$search_query = $_POST['query'];


    $query = "SELECT * FROM contact WHERE uid='".$_SESSION['uid']."' and name LIKE '$search_query%' LIMIT 12";
    $result = mysqli_query($connect, $query);

  if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_array($result)) {
    echo $row['name']."<br/>";
  }
} else {
  echo "<p style='color:red'>Contact not found</p>";
}

}
?>
