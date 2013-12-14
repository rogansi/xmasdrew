<?php
include('memory.php');
addMemory($conn,$_REQUEST['uid'],$_REQUEST['title'],$_REQUEST['body'],$_REQUEST['year'],$_REQUEST['picture'],$_REQUEST['public']);
?>