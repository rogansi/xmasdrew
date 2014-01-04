<?php
include('memory.php');
if(isset($_SESSION['uid'])){
	insertComment($conn,$_REQUEST['memID'],$_REQUEST['title'],$_REQUEST['body']);
}else{
	echo "please login";
	die();
}

?>