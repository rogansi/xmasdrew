<?php
include("memory.php");
updateMemory($conn,$_REQUEST['memID'],$_REQUEST['title'],$_REQUEST['body']);
?>