<?php
if(isset($_REQUEST['userid'])){
$uid = $_REQUEST['userid'];
}else{
$uid = 3;
}
$query = "SELECT memories.title, memories.body, users.fname, users.lname FROM memories INNER JOIN users ON memories.userid = users.id WHERE memories.userid ='$uid'";
$conn = mysqli_connect($host, $username, $password, $database);
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo "<p>".$fname."</p><p>".$title."</p><br><br>";
	}
?>