<?php 
require('users/readcfg.php');
?>
<html>
<head>
<title><?php echo $title;?></title>
<?php echo $stylelink;?>
<?php echo $layoutlink;?>
</head>
<body>

<div id = "head">
     <div id = "head_acct"></div>
     <div id = "head_logo"></div>
     <div id = "head_nav"></div>
</div>

<div id = "main">
<?php
$query = "SELECT * FROM users";
$conn = mysqli_connect($host, $username, $password, $database);
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo $username;
	}
?>
</div>

<div id = "footer"></div>
</body>
</html>