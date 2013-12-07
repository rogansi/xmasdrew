<?php
if(isset($_REQUEST['title'])){
	$memTitle = $_REQUEST['title'];
}else{
	$memTitle = "The Dream...";
}
$query = "SELECT * FROM memories INNER JOIN users ON memories.userid = users.id WHERE title = '$memTitle'";
$conn = mysqli_connect($host, $username, $password, $database);
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
while($row = mysqli_fetch_assoc($result)){
		extract($row);
	    echo "<div class = 'singlemem'>";
		echo "<p class = 'singlemem_title'>".$title."</p>";
		echo "<p class = 'singlemem_body'>".$body."</p>";
		echo "<p class = 'singlemem_sig'>".$fname."</p>";
		echo "</div>";
	}
?>
<script>$(".singlemem").draggable();</script>