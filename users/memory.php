<?php
session_start();
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
		if($picture==null){
			echo "<p>No Picture</p>";
		}else{
		echo "<p class = 'singlemem_image'><img src = '../layout/images/".$picture.".jpg' height = '50' width = '75' alt = 'pic' /></p>";
	    }
		echo "<p class = 'singlemem_body'>".$body."</p>";
		echo "<p class = 'singlemem_sig'>".$fname."</p>";
		echo "</div>";
	}
}
//sets up a memory to be edited
function editMemory($conn){
$memTitle = $_REQUEST['editTitle'];
$memTitle = addslashes($memTitle);
$query = "SELECT * FROM memories INNER JOIN users ON memories.userid = users.id WHERE title = '$memTitle'";
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo "<label>Title</label><input type = 'text' value =\"".$title."\"/><br>";
		echo "<label>Body</label><br><textarea rows = '8' cols = '50'>".$body."</textarea><br>";
		echo "<button>Save Changes</button>";
	}
}
//loads memories of one user
function loadMyLinks($conn){
$retHTML = "";
$tmpID = $_SESSION['uid'];
$query = "SELECT * FROM memories WHERE userid = '$tmpID'";
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
echo "<div class = 'memtitle'>";
while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo "<h2 class = 'memlink' onclick = \"editMemory('".cleanString($conn,$title)."')\">".stripslashes($title)."</h2><br>";
	}
echo "</div>";
}

//grabs a list of all memories from the database, and creates a link for each one to display a single memory.
function loadMemoryLinks($conn){
$retHTML = "";
$query = "SELECT * FROM memories";
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
echo "<div class = 'memtitle'>";
while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo "<h2 class = 'memlink' onclick = \"singleMemory('".cleanString($conn,$title)."')\">".stripslashes($title)."</h2><br>";
	}
echo "</div>";
}

//inserts a new memory into the database
function addMemory($conn,$userID,$memTitle,$memBody,$memYear,$memPic,$memPublic){
$query = "INSERT INTO memories (id,userid,title,body,year,picture,public) VALUES ('','".cleanString($conn,$userID)."','".cleanString($conn,$memTitle)."','".cleanString($conn,$memBody)."','".cleanString($conn,$memYear)."','".cleanString($conn,$memPic)."','$memPublic')";
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
if($result==1){
	echo $result;
}else{
    echo "Something went wrong";
}
}
//checks users supplied password and name against the database, if valid, stores their userid in $_REQUEST['uid]
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
		extract($row);
		$_SESSION['uid'] = $id;
	}
	echo $_SESSION['uid'];
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