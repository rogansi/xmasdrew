<?php
include('memory.php');
if(isset($_SESSION['uid'])){
	addMemoryPrep($conn,$_SESSION['uid'],$_REQUEST['title'],$_REQUEST['body'],$_REQUEST['year'],$_REQUEST['picture'],$_REQUEST['public']);
}else{
	echo "please login";
	die();
}

?>