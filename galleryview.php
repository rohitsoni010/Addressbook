
<?php
session_start();
?>
<?php
$con = mysqli_connect("localhost","root","","addressbook");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
<head>


<style type="text/css">
.gallery img {
    width: 22%;
    height: auto;
    border-radius: 8px;
    cursor: pointer;
    transition: .4s;
}
</style>

<style>
.back{
  margin-left:auto;
  margin-right:auto;
  background-color: black;
  border: none;
  border-radius: 8px;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration-color: white;
  font-size: 20px;
  cursor: pointer;
  font-weight: bold;

}
.back:hover {
  background-color: grey;
}
a { color: white; }
</style>
<center>


<?php if (isset($_REQUEST['id'])) { ?>
	<div class="gallery">
		<div class="navbar-collapse gallery">
			<ul>
			<?php
				$sql_query="select * from images where rid='".$_REQUEST['id']."' and uid='".$_SESSION['uid']."'";
				$resultset = mysqli_query($con, $sql_query) or die("database error:". mysqli_error($con));
				while($rows = mysqli_fetch_array($resultset) ) { ?>
				<li>
					<a href="upload/<?php echo $rows["name"]; ?>" data-lightbox="<?php echo $_SESSION['userid']; ?>" data-title="<?php echo $rows["image_title"]; ?>"><img
			src="upload/<?php echo $rows["name"]; ?>" class="images" width="200" height="200"></a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
<?php } ?>
<center>
<button class="back" style="float: center;"><a style="text-decoration:none" href="gallery.php"> BACK</a></button>
</html>
