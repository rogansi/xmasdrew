<!DOCTYPE html>
<?php
include("../users/memory.php");
$myUID = $_SESSION['uid'];
$myName;
$myLastName;
$myPicture;
$query = "SELECT * FROM users WHERE id = '$myUID'";
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
while($row = mysqli_fetch_assoc($result)){
		extract($row);
		$myName = $fname;
		$myLastName = $lname;
		$myPicture = $userpicture;
	}
?>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>
<h3><? echo $myName." ".$myLastName?></h3>

<p class = "optionbutton">

</p>
</body>
</html>