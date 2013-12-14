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


//Collects the information from a single memory using the stored 'title' variable.
function loadSingleMemory($conn){
if(isset($_REQUEST['title'])){
	$memTitle = $_REQUEST['title'];
}else{
	$memTitle = "The Dream...";
}
$memTitle = addslashes($memTitle);
$query = "SELECT * FROM memories INNER JOIN users ON memories.userid = users.id WHERE title = '$memTitle'";
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

//grabs a list of all memories from the database, and creates a link for each one to display a single memory.
function loadMemoryLinks($conn){
$retHTML = "";
$query = "SELECT * FROM memories";
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
echo "<div class = 'memtitle'>";
while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo "<h2 class = 'memlink' onclick = \"setMemory('".cleanString($conn,$title)."')\">".stripslashes($title)."</h2><br>";
	}
echo "</div>";
}

//inserts a new memory into the database
function addMemory($conn,$userID,$memTitle,$memBody,$memYear,$memPic,$memPublic){
$query = "INSERT INTO memories (id,userid,title,body,year,picture,public) VALUES ('','$userID','$memTitle','$memBody','$memYear','$memPic','$memPublic')";
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
echo $result;
}

function userLogin($conn,$uname,$ps){
	$cleanPW = cleanString($conn,$ps);
	$cleanUN = cleanString($conn,$uname);
	$finalPW = sha1($cleanPW);
	$query = "SELECT * FROM users WHERE username ='$cleanUN' && password = '$finalPW'";
	$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
	if(mysqli_num_rows($result)==0){
		echo "Invalid";
	}else{
	while($row = mysqli_fetch_assoc($result)){
		foreach($row as $key=>$val){
			echo "<p>".$key." :  ".$val."</p>";
		}
	}
	}
}
function testUserLogin($conn){
	userLogin($conn,"Rogansi","Guest");
}

//changes a users password
function resetPW($conn,$userID,$newPW){
	$finalPW = sha1($newPW);
	$query = "UPDATE users SET password = '$finalPW' WHERE id = $userID";
	$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
	echo $result;
	
}
function testResetPW($conn){
	resetPW($conn,3,"Guest");
}
//adds slashes before dangerous special chars and returns the new string
function cleanString($conn,$string){
	$newString = mysqli_real_escape_string($conn, $string);
	$newString = addcslashes($newString, '%_');
	return $newString;
}
?>