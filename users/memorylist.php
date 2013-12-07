<?php
//Test the username
echo $username;
$query = "SELECT * FROM memories";
//$conn = mysqli_connect($host, $username, $password, $database);
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
echo "<div class = 'memtitle'>";
while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo "<h1 class = 'memlink' onclick = \"setMemory('".addslashes($title)."')\">".$title."</h1>";
	}
echo "</div>";
?>
<script>
    function setMemory(memTitle){
    	alert(memTitle);
    	$.ajax({
    		type: "POST",
            url: "users/singlememory.php",
            data: {title:memTitle}
    	}).done(function(result){
    		$(".singlemem").html(result);
    	});
    }
	$(".memlink").hover(function(){
		$(this).css("cursor","pointer")
		$(this).switchClass("memlink","memlink2");
	},function(){
		$(this).switchClass("memlink2","memlink");
	});
</script>