<?php 
require('readcfg.php');
//require_once('memory.php');
?>
<html>
<head>

<title><?php echo $title;?></title>
<?php 
      echo $stylelink;
      echo $layoutlink;
      echo $jquery_link;
	   echo $jqueryui_link;
      echo $jqueryui_style;
	  
?>

</head>
<body>

<div id = "head">
     <div id = "head_acct"></div>
     <div id = "head_logo"></div>
     <div id = "head_nav"></div>
</div>

<div id = "main">
	<div id = "test">
		
	</div>
	<div class = 'singlemem'>
		<?php
//include("singlememory.php");
?>
	</div>
<?php
//include("memorylist.php");
?>
</div>

<div id = "footer">
<button onclick = 'addMemory("4","Test","Test me","1984","",0)'>Press Me</button>
</div>
</body>
<script>
function loadMemList(){
$.post("memorylist.php",function(data){
	$("#test").html(data);
});
}
    function setMemory(memTitle){
    	alert(memTitle);
    	$.ajax({
    		type: "POST",
            url: "singlememory.php",
            data: {'title':memTitle}
    	}).done(function(result){
    		$("#test").html(result);
    	});
    }

function addMemory(userID,memTitle,memBody,memYear,memPic,memPublic){
    	alert(memBody);
    	$.ajax({
    		type: "POST",
            url: "addmemory.php",
            data: {'uid':userID,'title':memTitle,'body':memBody,'year':memYear,'picture':memPic, 'public':memPublic}
    	}).done(function(result){
    		$("#test").html(result);
    	});
    }
	$(".memlink").hover(function(){
		$(this).css("cursor","pointer")
		$(this).switchClass("memlink","memlink2");
	},function(){
		$(this).switchClass("memlink2","memlink");
	});
</script>
</html>