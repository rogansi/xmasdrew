<?php
include("memory.php");
echo "The answer is:  ".$_SESSION['uid'];
loadMyLinks($conn);
echo "<script>setupLayout();</script>";
?>