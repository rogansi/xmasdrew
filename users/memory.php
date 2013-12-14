<?php
$init_vars = parse_ini_file('../config/memoryjar.cfg',true);
$host=$init_vars['connection information']['server'];
$memusername=$init_vars['connection information']['username'];
$database=$init_vars['connection information']['db'];
$mempassword=$init_vars['connection information']['password'];
//$host='localhost';
//$memusername="guest";
//$database="memoryjar";
//$mempassword="n"."ot-Beckett1320";
$conn = mysqli_connect($host, $memusername, $mempassword, $database) or die (mysqli_error($conn));

function loadSingleMemory($conn){
if(isset($_REQUEST['title'])){
	$memTitle = $_REQUEST['title'];
}else{
	$memTitle = "The Dream...";
}
$query = "SELECT * FROM memories INNER JOIN users ON memories.userid = users.id WHERE title = '$memTitle'";
//$conn = mysqli_connect($host, $memusername, $mempassword, $database);
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
while($row = mysqli_fetch_assoc($result)){
		extract($row);
	    echo "<div class = 'singlemem'>";
		echo "<p class = 'singlemem_title'>".$title."</p>";
		echo "<p class = 'singlemem_body'>".$body."</p>";
		echo "<p class = 'singlemem_sig'>".$fname."</p>";
		echo "</div>";
	}
}
function loadMemoryLinks($conn){
$retHTML = "";
$query = "SELECT * FROM memories";
//$conn = mysqli_connect($host,$memusername,$mempassword,$database);
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
echo "<div class = 'memtitle'>";
while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo "<h1 class = 'memlink' onclick = \"setMemory('".addslashes($title)."')\">".$title."</h1>";
	}
echo "</div>";
}
//inserts a new memory into the database
function addMemory($conn,$userID,$memTitle,$memBody,$memYear,$memPic,$memPublic){
$query = "INSERT INTO memories (id,userid,title,body,year,picture,public) VALUES ('','$userID','$memTitle','$memBody','$memYear','$memPic','$memPublic')";
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
echo $result;
}


?>